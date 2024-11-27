const prestasiModel = require("../models/prestasiModel");

// get all data prestasi
exports.getAllPrestasi = async (req, res) => {
  try {
    const prestasi = await prestasiModel.getAllPrestasi();
    res.status(200).json(prestasi);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
};

// insert prestasi
exports.insertPrestasi = async (req, res) => {
  try {
    const prestasi = await prestasiModel.insertPrestasi(req.body);
    res
      .status(200)
      .json({ id: result.insertID, message: "Prestasi berhasil ditambahkan" });
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
};

//  get prestasi by ID
exports.getPrestasiById = async (req, res) => {
  try {
    const id = req.params.id;
    const prestasi = await prestasiModel.getPrestasiById(id);
    if (prestasi.length === 0) {
      return res.status(404).json({ message: "Prestasi tidak ditemukan" });
    }
    res.status(200).json(prestasi);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
};

// delete prestasi by ID
exports.deletePrestasi = async (req, res) => {
  try {
    const id = req.params.id;
    await prestasiModel.deletePrestasi(id);
    res.status(200).json({ message: "Prestasi berhasil dihapus" });
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
};
