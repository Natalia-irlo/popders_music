<?php

use PHPUnit\Framework\TestCase;
use App\Connection\CrudConnection;
use App\Controllers\Coders;

class CodersTest extends TestCase{
    public $connection;

    public function setUp(): void
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=popders", "root", "");
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function testGetRows()
    {
        $coder = new Coders($this->connection);
        $rows = $coder->getRows();
        $this->assertIsArray($rows);
       
    }

    public function testAddRow()
    {
        $coder = new Coders;

        $datosEntrada = [         
            "name" => "Gabriela",             
        ];
    
        $resultAdd = $coder->addRow($datosEntrada["name"]);
        $this->assertNotFalse($resultAdd);
    }

    public function testUpdateRow()
    {
        $coder = new Coders;

        $datosEntrada = [        
            "name" => "Natalia",             
        ];
    
        $resultUpdate = $coder->updateRow($datosEntrada["name"]);
        $this->assertTrue($resultUpdate);
    }

    public function testDeleteRow()
    {
        $coder = new Coders;

        $datosEntrada = [         
            "id_coder" => 5             
        ];
    
        $resultDelete = $coder->deleteRow($datosEntrada["id_coder"]);
        $this->assertTrue($resultDelete);
    }
}