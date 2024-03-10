<?php

function dd($var):void
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    exit();
}

function getFilmInfo($res_arr):array
{
    $result = [];
    $result[0]['filmId'] = $res_arr[0]['filmId'];
    $result[0]['filmName'] = $res_arr[0]['filmName'];
    $result['persons'] = [];
    foreach ($res_arr as $film)
    {
        $result['persons'][] = [
            'personId' => $film['personId'],
            'personName' => $film['personName']
        ];
    }
    return $result;
}
function abort($errorNum = 404):void
{
    if ($errorNum == 404){
        require '404.php';
    }
    http_response_code($errorNum);
    exit();
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