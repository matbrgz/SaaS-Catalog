<?php

namespace Asw\Database;

use Acme\Interfaces\Imodel;
use Asw\Database\Connection;
use Asw\Database\AttributesCreate;
use Asw\Database\AttributesUpdate;
use PDOException;

class AswModel implements Imodel {
    private $database;

    public function __construct() {
        $database = new Connection;
        $this->database = $database->connection();
    }

    public function create($attributes) {}

    public function read() {
        $query = "SELECT * FROM $this->table";
        $pdo = $this->database->prepare($query);
        try {
            $pdo->execute();
            return $pdo->fetchAll();
        } catch(PDOException $e) {
            dump($e->getMessage());
        }
    }

    public function update($id, $attributes) {}

    public function delete($name, $value) {}

    public function findBy($name, $value) {}
}