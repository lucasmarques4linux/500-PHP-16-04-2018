<?php 

const HOST = 'localhost';
const PORT = '5432';
const USER = 'lucas';
// const PASS = '123'; // PostgreSQL
const PASS = '@da4linux'; // MySQL
const DB = 'blog';

//"host={$host} port={$port} dbname={$db} user={$user} password={$pass}"
const CON_STRING = 'host='.HOST.' port='.PORT.' dbname='.DB.' user='.USER.' password='.PASS; // Postgres

// Mysql or PostgreSQL
// const DB_CONNECTION = 'PostgreSQL';
const DB_CONNECTION = 'Mysql';