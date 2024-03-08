<?php

function dd($var):void
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    exit();
}

function abort($errorNum):void
{
    http_response_code($errorNum);
    require '404.php';
    exit();
}

function mysqliConnect():mixed
{
    try {
        $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
        mysqli_select_db($link, DB_NAME);
    } catch (mysqli_sql_exception $exception) {
        $errors[] = $exception->getMessage();
    }
    return $link;
}
function getPagesCount($link):int
{
    try{
        $queryString = "SELECT COUNT(*) FROM `films`";
        $result = mysqli_query($link,$queryString);
        $row = mysqli_fetch_array($result);
    } catch (mysqli_sql_exception $exception) {
        $errors[] = $exception->getMessage();
    }
    return $row[0];
}
function showPaginationBar(int $count):void
{
    for ($i = 1; $i <= $count; $i++){
        echo "<a href='?page=$i'>$i</a> ";
    }
}
function showFilmsOnPage($link,$start,$pageSize):array
{
    try {
        $queryString = "SELECT filmName FROM films LIMIT $start, $pageSize";
        $result = mysqli_query($link,$queryString);
        $row = mysqli_fetch_all($result);
    }catch (mysqli_sql_exception $exception){
        $errors[] = $exception->getMessage();
    }
    return $row;
}
function showFilms($films){
    foreach ($films as $film){
        echo "<span>$film[0]</span><br>";
    }
}