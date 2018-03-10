<?php

$db = new SQLite3("database.db");

$crtbl = "CREATE TABLE IF NOT EXISTS info(name TEXT, num TEXT)";

$db->exec($crtbl);

?>