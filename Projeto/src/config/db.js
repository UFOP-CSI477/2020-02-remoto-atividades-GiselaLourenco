const { Pool } = require('pg')

module.exports = new Pool({
    host: process.env.HOST || "localhost",
    port: process.env.PORT || 5432,
    user:  process.env.USER || "postgres",
    password:  process.env.PASSWORD || "postgres",
    database:  process.env.DATABASE || "gymmanager"
})