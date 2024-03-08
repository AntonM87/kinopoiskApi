<?php

global $router;

$router->add('',PAGES . "/main.php");
$router->add('film',PAGES . "/films/film.php");
$router->add('film',PAGES . "/films/store.php");
$router->post('film/create',PAGES . "/films/create.php");
$router->post('film/delete',PAGES . "/films/destroy.php");

$router->post('about',PAGES . "/about.php");
$router->post('contact',PAGES . "/contact.php");
