<?php

use PHPUnit\Framework\TestCase;
require "/xampp/htdocs/proyecto-bd/popders_music/backend/app/connection/CrudConnection.php";
require "/xampp/htdocs/proyecto-bd/popders_music/backend/app/controllers/Coders.php";

class CodersTest extends TestCase{
    public $connection;

    public function setUp(): void
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=popders", "root", "");
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function testGetRows()
    {
        $song = new Coders($this->connection);
        $rows = $song->getRows();

        $this->assertCount(2, $rows);
        $this->assertEquals('Gabriela', $rows[0]['name']);
        $this->assertEquals('Natalia', $rows[1]['name']);
       
    }

    public function testAddRow()
    {
        $song = new Coders($this->connection);

        $datosEntrada = [         
            "name" => "Gabriela",             
        ];
    
        $resultAdd = $song->addRow($datosEntrada["name"]);
        $this->assertTrue($resultAdd);
    }

    public function testUpdateRow()
    {
        $song = new Coders($this->connection);

        $datosEntrada = [   
            "id_coder" => 1,      
            "name" => "Natalia",             
        ];
    
        $resultUpdate = $song->updateRow($datosEntrada["id_song"], $datosEntrada["id_coder"], $datosEntrada["title"], $datosEntrada["artist"], $datosEntrada["genre"], $datosEntrada["url"], $datosEntrada["date"], $datosEntrada["status"]);
        $this->assertTrue($resultUpdate);
    }

    public function testDeleteRow()
    {
        $song = new Coders($this->connection);

        $datosEntrada = [         
            "id_coder" => 1,             
        ];
    
        $resultDelete = $song->deleteRow($datosEntrada["id_coder"]);
        $this->assertTrue($resultDelete);
    }
}