<?php
class film
{
    private $data = [];
    private $db ;
    public function __construct()
    {
        require CORE . '/Db.php';
        $dbConfig = require CONFIG . '/db.php';
        $this->db = new Db($dbConfig);
    }

    public static function add($film): bool
    {

        return true;
    }
    public function getId($GET):array
    {
        $result = [];
        if (empty($GET['id'])) abort(404);
        if (isset($GET['id'])){
            $result = $this->db->query("SELECT * FROM films
                    LEFT JOIN filmsPersons ON films.filmId = filmsPersons.filmId
                    LEFT JOIN persons ON filmsPersons.personId = persons.personId
                    WHERE films.filmId ='{$GET['id']}'")->fetchAll();
        }
        return $result;
    }

    public function getName($GET):array
    {
        $result = [];
        if (empty($GET['filmName'])) abort(404);
        if (isset($GET['filmName'])){
            $result = $this->db->query("SELECT * FROM films
                    LEFT JOIN filmsPersons ON films.filmId = filmsPersons.filmId
                    LEFT JOIN persons ON filmsPersons.personId = persons.personId
                    WHERE films.filmName ='{$GET['filmName']}'")->fetchAll();
        }
        return $result;
    }
    public static function delete($filmId):bool
    {
        return true;
    }
    public static function update($filinfo):bool
    {
        return true;
    }
    public static function getStore():bool
    {
        return true;
    }
}