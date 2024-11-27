const express = require("express");
const prestasiController = require("../controllers/prestasiController");

const router = express.Router();

router.get("/", prestasiController.getAllPrestasi);
router.get("/:id", prestasiController.getPrestasiById);
router.post("/", prestasiController.insertPrestasi);
router.delete("/:id", prestasiController.deletePrestasi);

module.exports = router;
