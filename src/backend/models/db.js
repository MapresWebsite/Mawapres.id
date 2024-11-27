const mysql = require("mysql2");
const { database } = require("../config");

// for connection
const pool = mysql.createPool({
  host: database.host,
  user: database.user,
  password: database.password,
  database: database.database,
});

module.exports = pool.promise();
