const serverless = require("serverless-http");
const express = require("express");
const cors = require("cors");
const admin = require("firebase-admin");
const path = require("path");

// Initialize Firebase Admin SDK
try {
  const serviceAccount = require("../serviceAccountKey.json");
  admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
  });
  console.log("✅ Firebase Admin SDK Initialized successfully.");
} catch (error) {
  console.warn("⚠️ Firebase Admin not initialized. Using fallback dummy data.");
}

const app = express();
app.use(cors());
app.use(express.json());

// Serve static files
app.use(express.static(path.join(__dirname, "../")));

// --- API ENDPOINTS ---

// Dashboard Stats
app.get("/api/dashboard-stats", async (req, res) => {
  if (!admin.apps.length) {
    return res.json({
      totalSales: 4520.5,
      productsInStock: 85,
      lowStockAlerts: 4,
      activeCustomers: 128,
      recentSales: [
        {
          invoice_number: "INV-001",
          customer_name: "Rashid Subhan",
          total_amount: 1200.0,
        },
        {
          invoice_number: "INV-002",
          customer_name: "Ali Khan",
          total_amount: 450.5,
        },
      ],
    });
  }
  // Real implementation would fetch from Firestore...
});

// Products CRUD
app.get("/api/products", async (req, res) => {
  res.json([
    {
      id: "1",
      name: "Core i7 Laptop",
      brand: "HP",
      category: "New",
      price: 85000,
      stock: 10,
    },
    {
      id: "2",
      name: "Gaming Mouse",
      brand: "Logitech",
      category: "Accessory",
      price: 2500,
      stock: 4,
    },
    {
      id: "3",
      name: "Refurbished Monitor",
      brand: "Dell",
      category: "Refurbished",
      price: 12000,
      stock: 15,
    },
  ]);
});

// Sales
app.post("/api/sales", (req, res) => {
  res.json({ success: true, message: "Sale recorded successfully" });
});

// Suppliers
app.get("/api/suppliers", (req, res) => {
  res.json([
    {
      id: "1",
      name: "TechWholesale Ltd",
      contact: "0300-1234567",
      balance: 45000,
    },
    { id: "2", name: "Computer Plaza", contact: "0312-7654321", balance: 0 },
  ]);
});

// Customers & Loyalty
app.get("/api/customers", (req, res) => {
  res.json([
    {
      id: "1",
      name: "John Doe",
      phone: "0333-1112223",
      points: 150,
      balance: 2000,
    },
    {
      id: "2",
      name: "Jane Smith",
      phone: "0345-5556667",
      points: 45,
      balance: 0,
    },
  ]);
});

// User Management
app.get("/api/users", (req, res) => {
  res.json([
    {
      id: "1",
      name: "Rashid Subhan",
      role: "Admin",
      username: "rashid",
      status: "Active",
    },
    {
      id: "2",
      name: "Ahmad Khan",
      role: "Staff",
      username: "ahmad",
      status: "Active",
    },
  ]);
});

// Export the handler for Vercel
module.exports = serverless(app);
