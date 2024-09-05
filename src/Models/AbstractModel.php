<?php
namespace Victor\Inventory\Models;

use Victor\Inventory\Helpers\Database\Database;

abstract class AbstractModel
{
    public $table;

    protected Database $database;

    protected $connect;

    public function __construct() {
        $this->database = new Database();
        $this->connect = $this->database->execute();
    }

    //"INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)"
    public function create($data)
    {
        echo "metodo para criação de uma data";
    }

    public function findOne()
    {

    }

    public function findAll()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}