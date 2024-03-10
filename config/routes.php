<?php

global $router;

$router->get('',PAGES . "/main.php");
$router->get('film',CONTROLLERS . "/films/film.php");
$router->get('film/search',CONTROLLERS . "/films/search.php");
$router->get('film/sort',CONTROLLERS . "/films/sort.php");
$router->get('films',CONTROLLERS . "/films/store.php");
$router->post('film/create',CONTROLLERS . "/films/add.php");
$router->delete('film/delete',CONTROLLERS . "/films/delete.php");

$router->post('about',PAGES . "/about.php");
$router->post('contact',PAGES . "/contact.php");
