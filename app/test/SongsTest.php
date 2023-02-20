<?php

use PHPUnit\Framework\TestCase;
use App\Connection\CrudConnection;
use App\Controllers\Songs;

class SongsTest extends TestCase{
    public $connection;

    public function setUp(): void
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=popders", "root", "");
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function testGetRows()
    {
        $song = new Songs($this->connection);
        $rows = $song->getRows();
        $this->assertIsArray($rows);
    }
    

    public function testAddRow()
    {
        $song = new Songs($this->connection);

        $datosEntrada = [         
            "id_coder" => 1,             
            "title" => "Flowers",
            "artist" => "Miley Cyrus",
            "genre" => "Pop",
            "url" => "https://www.youtube.com/watch?v=G7KNmW9a75Y",
            "date" => "09-02-2023",
            "status" => false
        ];
    
        $resultAdd = $song->addRow($datosEntrada["id_coder"], $datosEntrada["title"], $datosEntrada["artist"], $datosEntrada["genre"], $datosEntrada["url"], $datosEntrada["date"], $datosEntrada["status"]);
        $this->assertNotFalse($resultAdd);
    }

    public function testUpdateRow()
    {
        $song = new Songs($this->connection);

        $datosEntrada = [   
            "id_song" => 1,      
            "id_coder" => 1,             
            "title" => "Volare",
            "artist" => "Danny Ocean",
            "genre" => "Reggaeton",
            "url" => "https://www.youtube.com/watch?v=GGAcqZUOwRE",
            "date" => "10-02-2023",
            "status" => false
        ];
    
        $resultUpdate = $song->updateRow($datosEntrada["id_song"], $datosEntrada["id_coder"], $datosEntrada["title"], $datosEntrada["artist"], $datosEntrada["genre"], $datosEntrada["url"], $datosEntrada["date"], $datosEntrada["status"]);
        $this->assertTrue($resultUpdate);
    }

    public function testDeleteRow()
    {
        $song = new Songs($this->connection);

        $datosEntrada = [         
            "id_coder" => 1,             
        ];
    
        $resultDelete = $song->deleteRow($datosEntrada["id_coder"]);
        $this->assertTrue($resultDelete);
    }
}

?>