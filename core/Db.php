<?php

class Db
{
    private $conn;

    public function __construct(array $dbConfig)
    {
        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
        try {
            $this->conn = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options']);
        }catch (PDOException $e){
            echo json_encode([
                'status' => 'error',
                'code' => 500,
                'message' => $e->getMessage()
            ]);
            abort(500);
        }
    }
    public function query($query): PDOStatement
    {
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement;
    }
}