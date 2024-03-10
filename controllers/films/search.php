<?php

require './core/Film.php';
$filmsObject = new Film();
$films = $filmsObject->getName($_GET);
$result = getFilmInfo($films);
echo json_encode($result);