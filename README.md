# MY-FYP Project

## Overview
This project is a web-based inventory and sales management system, built with Node.js (Express), Firebase Admin SDK, and a static HTML/CSS/JS frontend. It is designed to help manage products, sales, purchases, customers, suppliers, and generate reports.

## Features
- User login system
- Dashboard with sales and inventory stats
- Product, customer, supplier, and user management
- Sales, purchases, and ledger tracking
- Accessories and refurbished product management
- Reports generation
- Responsive UI with static HTML, CSS, and JavaScript
- RESTful API endpoints (dummy data fallback if Firebase is not configured)

## Project Structure
```
login.html
package.json
server.js
vercel.json
api/
  index.js
assets/
  css/
    style.css
  js/
    main.js
views/
  accessories.html
  customers.html
  dashboard.html
  dashboard.php
  ledger.html
  products.html
  purchases.html
  refurbished.html
  reports.html
  reports.php
  sales.html
  suppliers.html
  users.html
```

## Getting Started
1. **Install dependencies:**
   ```bash
   npm install
   ```
2. **Start the server:**
   ```bash
   npm start
   ```
   The server will run at `http://localhost:3000`.

3. **Access the app:**
   Open your browser and go to `http://localhost:3000/login.html` to use the login page.

## API Endpoints
- `/api/dashboard-stats` — Returns dashboard statistics (dummy data if Firebase is not configured)

## Firebase Setup (Optional)
- To enable real data, add your `serviceAccountKey.json` file to the project root for Firebase Admin SDK.

## Deployment
- The project includes a `vercel.json` for deployment on Vercel.

## License
This project is licensed under the ISC License.
