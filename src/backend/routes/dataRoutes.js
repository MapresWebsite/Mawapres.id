const express = require("express");
const dataController = require("../controllers/dataController");

const router = express.Router();

router.get("/mahasiswa", dataController.getAllMahasiswa);
router.get("/dospem", dataController.getAllDospem);
router.get("/peran-mhs", dataController.getAllPeranMhs);
router.get("/peran-dosen", dataController.getAllPeranDosen);
router.get("/tingkat-kompetisi", dataController.getAllTingkatKompetisi);
router.get("/jenis-kompetisi", dataController.getAllJenisKompetisi);
router.get("/juara", dataController.getAllJuara);

module.exports = router;