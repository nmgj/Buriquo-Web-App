#!/usr/bin/env bash
set -e

if [ -n "${DATABASE_URL}" ] && [ -z "${DB_CONNECTION}" ]; then
  export DB_CONNECTION=pgsql
fi

if [ -n "${DATABASE_URL}" ] && [ -z "${DB_URL}" ]; then
  export DB_URL="${DATABASE_URL}"
fi

# If no external DB is configured or if SQLite is the local database, avoid database-backed session/cache/queue drivers.
if { [ -z "${DATABASE_URL}" ] && [ -z "${DB_URL}" ]; } || [ "${DB_CONNECTION}" = "sqlite" ]; then
  export SESSION_DRIVER=file
  export CACHE_STORE=file
  export QUEUE_CONNECTION=sync
  export QUEUE_FAILED_DRIVER=file
fi

# Ensure the SQLite database file is writable by the application.
if [ "${DB_CONNECTION}" = "sqlite" ] || { [ -z "${DB_CONNECTION}" ] && [ -z "${DATABASE_URL}" ]; }; then
  SQLITE_FILE="${DB_DATABASE:-/tmp/database.sqlite}"
  mkdir -p "$(dirname "$SQLITE_FILE")"
  touch "$SQLITE_FILE"
  chown www-data:www-data "$(dirname "$SQLITE_FILE")" "$SQLITE_FILE" || true
  chmod 775 "$(dirname "$SQLITE_FILE")" || true
  chmod 666 "$SQLITE_FILE" || true

  # Run DB health-check to ensure the SQLite file is writable and usable by PHP/PDO.
  if [ -f "$SQLITE_FILE" ]; then
    echo "Running DB health-check..."
    if ! php -d display_errors=1 -r "try { $dbPath = getenv('DB_DATABASE') ?: '${SQLITE_FILE}'; $pdo = new PDO('sqlite:'. $dbPath); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); $pdo->exec('CREATE TABLE IF NOT EXISTS __laravel_health_check (t TEXT);'); $stmt = $pdo->prepare('INSERT INTO __laravel_health_check (t) VALUES (:t);'); $stmt->execute([':t'=>date('c')]); echo 'DB health-check OK (wrote to: '. $dbPath)."\n"; } catch (Exception $e) { fwrite(STDERR, 'DB health-check failed: '. $e->getMessage()."\n"); exit(1); }"; then
      echo "ERROR: DB health-check failed. See logs above. Exiting."
      exit 1
    fi
  fi
fi

echo "Publishing cloudinary provider..."
php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag="cloudinary-laravel-config" --force

if [ "${SKIP_MIGRATIONS:-1}" = "0" ]; then
  echo "Running migrations..."
  php artisan migrate --force
else
  echo "Skipping database migrations because SKIP_MIGRATIONS is not set to 0."
fi

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Starting php-fpm and nginx..."

# Ensure nginx listens on the port provided by Render
if [ -n "${PORT}" ]; then
  sed -i "s/listen 80;/listen ${PORT};/" /etc/nginx/conf.d/default.conf
fi

php-fpm --nodaemonize --force-stderr &
exec nginx -g 'daemon off;'
