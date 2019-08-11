<?php

namespace Components\database;

use PDO;
class Query_db {

    public $pdo;

    function __construct(PDO $db) {
        $this->pdo = $db;
    }

    function getAllLists() {
        $sql = "SELECT * FROM list";
        $statement = $this->pdo->prepare($sql);

        $statement->execute();
        $lists = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $lists;
    }

    function add($table, $data) {
        $data_keys = array_keys($data);
        $dataTable = implode(",", $data_keys);
        $pointsTable = ":" . implode(",:", $data_keys);

        $sql = "INSERT INTO $table ($dataTable) VALUES ($pointsTable)";
        $statment = $this->pdo->prepare($sql);
        $statment->execute($data);
    }

    function getList($id) {
        $sql = "SELECT * FROM list WHERE id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $task = $statement->fetch(PDO::FETCH_ASSOC);

        return $task;
    }

    function edit($table, $data) {

        $data_table = "";
        foreach($data as $key => $value) {
            $data_table .= $key . "=:" . $key . ",";
        }

        $data_table = rtrim($data_table, ",");

        $sql = "UPDATE $table SET $data_table WHERE id = :id";

        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute($data);
    }

    function deleteList($id) {
        $statement = $this->pdo->prepare("DELETE FROM list WHERE id = :id");
        $result = $statement->execute($id);
    }
}

