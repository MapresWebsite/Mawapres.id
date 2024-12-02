const express = require("express");
const bodyPrseer = require("body-parser");
const cors = require("cors");
const prestasiRoutes = require("./routes/prestasiRoutes");
const dataRoutes = require("./routes/dataRoutes");

const app = express();
const PORT = 8080;

// middleware
app.use(cors());
app.use(bodyPrseer.json());
app.use("/api/prestasi", prestasiRoutes);
app.use("/api/data", dataRoutes);

app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
