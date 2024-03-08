<?php

//const DB_SERVER = 'localhost';
//const DB_USER = 'root';
//const DB_NAME = 'kinopoisk';
//const DB_PASS = '';
//$connect = null;
//$errors = [];
//
//try {
//    $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
//    mysqli_select_db($link,DB_NAME);
//} catch (mysqli_sql_exception $exception){
//    $errors[] = $exception ->getMessage();
//}
//
//try {
//    $queryString = "SELECT persons.personId, persons.personName, films.filmId, films.filmName FROM persons
//                    LEFT JOIN filmspersons ON persons.personId = filmspersons.personId
//                    LEFT JOIN films ON filmspersons.filmId = films.filmId
//                    WHERE films.filmId = 1";


//    $queryString = "SELECT films.filmId, films.filmName, persons.personName FROM films
//                    LEFT JOIN filmspersons ON films.filmId = filmspersons.filmId
//                    LEFT JOIN persons ON filmspersons.personId = persons.personId
//                    WHERE personName = 'том хэнкс'";

//    $queryString = "SELECT * FROM persons WHERE personId=(SELECT personId from filmspersons WHERE personId=2)";
//
//    $result = mysqli_query($link,$queryString);
//    $row = mysqli_fetch_array($result);
//} catch (mysqli_sql_exception $exception){
//    $errors[] = $exception ->getMessage();
//}

//$url = key($_GET);
//$r = new Router();
//
//$r->addRoute('/','index.php');
//$r->addRoute('','index.php');
//$r->addRoute('/film','film.php');
//$r->addRoute('/person','person.php');
//
//$r->route('/'.$url);

require "controllers/func.php";

define("APP", __DIR__);
define("PAGES", __DIR__ . '/pages');
define("CONFIG", __DIR__ . '/config');
define("CONTROLLERS", __DIR__ . '/controllers');
define("PATH", 'http://api');
const DB_SERVER = 'localhost';
const DB_USER = 'root';
const DB_NAME = 'kinopoisk';
const DB_PASS = '';
const PAGE_SIZE = 3;

$errors = [];

spl_autoload_register(function ($class){
    if (!is_file(CONTROLLERS . "/$class.php")) exit("Class $class not found");


        if (class_exists($class, false)){
        include "./controllers/$class.php";
    }else(
        exit("Module $class not found")
        );
});


$router = new Router();
require CONFIG . '/routes.php';
$router->matchRoute();

//$link = mysqliConnect();
//$totalPages = getPagesCount($link);
//
//$pagesCount = ceil($totalPages/PAGE_SIZE);
//
//$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//
//if ($page < 1 || $page > $pagesCount) abort(404);
//$start = ($page - 1) * PAGE_SIZE;
//
//showPaginationBar($pagesCount);
//$arrFilms = showFilmsOnPage($link,$start,PAGE_SIZE);
//
//echo "<br>";
//showFilms($arrFilms);

//$requestUri = parse_url($_SERVER['REQUEST_URI']);
//
//$url = trim(parse_url($_SERVER['REQUEST_URI']['path']),'/');

//if ($url === ''){
//    require PAGES . "/main.php";
//} else if ($url == "film"){
//    require PAGES . "/film.php";
//} else if ($url == "person"){
//    require PAGES . "/person.php";
//} else {
//    http_response_code(404);
//    require "404.php";
//    exit();
//}
