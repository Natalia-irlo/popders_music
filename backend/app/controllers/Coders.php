<?php

namespace App\Controllers;

use App\Connection\CrudConnection;

class Coders extends CrudConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connectDatabase();
    }

    public function getRows()
    {
        $rows = [];
        $seeAllQuery = 'SELECT name FROM coder';
        foreach ($this->connection->query($seeAllQuery) as $row) {
            $rows[] = $row['name'];
        }
        return $rows;
    }


    public function addRow($name)
    {
        $addRowQuery = "insert into coder (name) values ('$name')";
        $resultAdd = $this->connection->query($addRowQuery);  
        echo "Se ha insertado correctamente " . $name ."\n";
        if ($resultAdd){                    
            return true;
        }else {
            return false;
        }
    }

    public function updateRow($name)
    {
        $updateQuery = "UPDATE coder
        SET name ='$name'
        WHERE name = '$name'";

        $resultUpdate = $this->connection->query($updateQuery);
        echo "Se ha modificado correctamente el coder con " . $name . "y el nombre" . $name . "\n";
        if ($resultUpdate){
            return true;
        }else {
            return false;
        }
    }

    function deleteRow($id_coder)
    {
        $deleteQuery = "DELETE FROM coder WHERE id_coder = '$id_coder'";
        $resultDelete = $this->connection->query($deleteQuery);

        echo "Se ha eliminado correctamente " . $id_coder . "\n";
        if ($resultDelete){
            return true;
        }else {
            return false;
        }
    }

  /*  function existsCoder($name) {
        $query = "SELECT id_coder FROM coder WHERE name = '{$name}'";

        $result = $this->connection->query($query);
        $row = $result->fetch(PDO::FETCH_OBJ);

        return $row == false ? false : $row->id_coder;
    }
     */
}