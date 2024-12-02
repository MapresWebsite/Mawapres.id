const dataModel = require("../models/dataModel");

// get all data mahasiswa
exports.getAllMahasiswa = async (req, res) => {
    try {
        const mahasiswa = await dataModel.getAllMahasiswa();
        res.status(200).json(mahasiswa);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};

// get all data dosen
exports.getAllDospem = async (req, res) => {
    try {
        const dosen = await dataModel.getAllDospem();
        res.status(200).json(dosen);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};

// get all data peran mahasiswa
exports.getAllPeranMhs = async (req, res) => {
    try {
        const peranMhs = await dataModel.getAllPeranMhs();
        res.status(200).json(peranMhs);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};

// get all data peran dosen
exports.getAllPeranDosen = async (req, res) => {
    try {
        const peranDosen = await dataModel.getAllPeranDosen();
        res.status(200).json(peranDosen);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};

// get all data tingkat kompetisi
exports.getAllTingkatKompetisi = async (req, res) => {
    try {
        const tingkatKompetisi = await dataModel.getAllTingkatKompetisi();
        res.status(200).json(tingkatKompetisi);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};

// get all data jenis kompetisi
exports.getAllJenisKompetisi = async (req, res) => {
    try {
        const jenisKompetisi = await dataModel.getAllJenisKompetisi();
        res.status(200).json(jenisKompetisi);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};

// get all juara
exports.getAllJuara = async (req, res) => {
    try {
        const juara = await dataModel.getAllJuara();
        res.status(200).json(juara);
    } catch (err) {
        res.status(500).json({ error: err.message });
    }
};