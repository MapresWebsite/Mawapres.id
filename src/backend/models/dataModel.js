const db = require("./db");

exports.getAllMahasiswa = async () => {
    const [rows] = await db.query("Select nim, nama from mahasiswa");
    return rows[0];
};

exports.getAllDospem = async () => {
    const [rows] = await db.query("Select nip, nama from dosen");
    return rows[0];
};

exports.getAllPeranMhs = async () => {
    const [rows] = await db.query("Select id, nama from peran_mhs");
    return rows[0];
};

exports.getAllPeranDosen = async () => {
    const [rows] = await db.query("Select id, nama from peran_dosen");
    return rows[0];
};

exports.getAllJuara = async () => {
    const [rows] = await db.query("Select id, nama from juara");
    return rows[0];
};

exports.getAllJenisKompetisi = async () => {
    const [rows] = await db.query("Select id, nama from jenis_kompetisi");
    return rows[0];
};

exports.getAllTingkatKompetisi = async () => {
    const [rows] = await db.query("Select id, nama from tingkat_kompetisi");
    return rows[0];
};