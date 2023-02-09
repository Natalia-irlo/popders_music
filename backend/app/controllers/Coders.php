<?php

use CrudConnection;

class Coders extends CrudConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connectDatabase();
    }

    public function getRows()
    {
        $seeAllQuery = 'SELECT name FROM coder';
        foreach ($this->connection->query($seeAllQuery) as $row) {
            echo "\n";
            echo $row['name'] . "\n";
        }
    }


    public function addRow($name)
    {
        $addRowQuery = "insert into coder (name) values ('$name')";
        $this->connection->query($addRowQuery);
        echo "Se ha insertado correctamente " . $name . "\n";
    }

    public function updateRow($id_coder, $name)
    {
        $updateQuery = "UPDATE coder
        SET name ='$name'
        WHERE id_coder = '$id_coder'";

        $this->connection->query($updateQuery);
        echo "Se ha modificado correctamente el coder con " . $id_coder . "y el nombre" . $name . "\n";
    }

    function deleteRow($id_coder)
    {
        $deleteQuery = "DELETE FROM coder WHERE id_coder = '$id_coder'";
        $this->connection->query($deleteQuery);

        echo "Se ha eliminado correctamente " . $id_coder . "\n";
    }
}

$movement = new Coders;
$movement->addRow("Natalia");