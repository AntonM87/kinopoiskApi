<?php

$films = null;

if (isset($_GET['id'])) {
    require CORE . '/Db.php';
    $dbConfig = require CONFIG . '/db.php';
    $db = new Db($dbConfig);

    $films = $db->query("SELECT films.filmId, films.filmName, persons.personId, persons.personName FROM films
                    LEFT JOIN filmIdPersonId ON films.filmId = filmIdPersonId.filmId
                    LEFT JOIN persons ON filmIdPersonId.personId = persons.personId
                    WHERE films.filmId={$_GET['id']}")->fetchAll();
} else (
abort()
);

dd($films);