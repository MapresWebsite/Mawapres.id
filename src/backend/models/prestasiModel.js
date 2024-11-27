const db = require("./db");

exports.getAllPrestasi = async () => {
  const [rows] = await db.query("CALL sp_get_all_prestasi()");
  return rows[0];
};

exports.getPrestasiById = async (id) => {
  const [rows] = await db.query("CALL sp_get_prestasi_by_id(?)", [id]);
  return rows[0];
};

exports.insertPrestasi = async (data) => {
  const [result] = await db.query(
    "CALL sp_insert_prestasi(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
    [
      data.nama_lomba,
      data.penyelenggara,
      data.tanggal_mulai,
      data.tanggal_selesai,
      data.juara,
      data.jenis_kompetisi,
      data.tingkat_kompetisi,
      data.surat_tugas,
      data.sertifikat,
      data.foto_kegiatan,
      data.poster,
      data.url_kompetisi,
      data.jumlah_pt,
      data.tgl_surat_tugas,
      data.no_surat_tugas,
    ]
  );
  return result;
};

exports.deletePrestasi = async (id) => {
  await db.query("CALL sp_delete_prestasi(?)", [id]);
};
