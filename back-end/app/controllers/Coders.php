<?php


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
    }

    public function updateRow($id_coder, $name)
    {
        $updateQuery = "UPDATE coder
        SET name ='$name'
        WHERE id_coder = '$id_coder'";

        $this->connection->query($updateQuery);
    }

    function deleteRow($id_coder)
    {
        $deleteQuery = "DELETE FROM coder WHERE id_coder = '$id_coder'";
        $this->connection->query($deleteQuery);
    }
}

$movement = new Coders;
$movement->addRow("Natalia");