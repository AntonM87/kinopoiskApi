<?php
require_once "systems/Router.php";

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

//if (key_exists('PATH_INFO',$_SERVER)){
//
//}

//$url = trim($_SERVER['PATH_INFO'],"/");
//echo $url;

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "Hello world";
//if (!empty($errors)) {
//    echo "<pre>";
//    print_r($errors);
//    echo "</pre>";
//} else {
//    echo "<pre>";
//    print_r($row);
//    echo "</pre>";
//}
?>
</body>
</html>