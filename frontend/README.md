This folder contains a standalone static frontend scaffold (Vite + React) for the Buriquo project.

How it works
- The frontend lives in the frontend/ folder.
- Use npm run dev (in frontend/) to run a local dev server.
- Use npm run build (in frontend/) to produce static files in frontend/dist.

GitHub Pages deployment
- A GitHub Actions workflow (.github/workflows/deploy-frontend.yml) builds the frontend and deploys frontend/dist to the gh-pages branch using the repository's GITHUB_TOKEN when pushing to main or master.
- If your repo default branch is not main/master, update the workflow triggers accordingly.

Notes and next steps
- This scaffold does not remove the existing Laravel backend. It creates a separate static frontend so you can port UI and assets incrementally.
- Replace the placeholder UI in src/App.jsx with your app pages, or copy rendered HTML from the Laravel app into React components.
- After editing package.json dependencies, commit and push. The action will run on push and publish the built static site.
