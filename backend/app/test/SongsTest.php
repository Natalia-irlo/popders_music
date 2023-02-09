<?php
// use PHPUnit\Framework\TestCase;

// class SongsTest extends TestCase{
//     function testAddRows(){
//         // $songs = new Songs;
//         // $entrydata = addRow(12, "Rebelde", "RBD", "pop", "hahaha", "02/02/2022", true);

//         // $outputdata = [true, "{$entrydata["title"]}"];
//         // $datossalidareales = $songs->addRow(12, "Rebelde", "RBD", "pop", "hahaha", "02/02/2022", true);
//         // $this->assertEquals($outputdata, $datossalidareales);


//         {
//             public $connection;
        
//             public function setUp(): void
//             {
//                 $this->connection = new \PDO('mysql:host=localhost;dbname=test_db', 'username', 'password');
//                 $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//             }
        
//             public function testGetRows()
//             {
//                 $song = new Song($this->connection);
//                 $rows = $song->getRows();
        
//                 $this->assertCount(2, $rows);
//                 $this->assertEquals('Song 1', $rows[0]['title']);
//                 $this->assertEquals('Artist 1', $rows[0]['artist']);
//                 $this->assertEquals('Song 2', $rows[1]['title']);
//                 $this->assertEquals('Artist 2', $rows[1]['artist']);
//             }
//         }
//     }
// }

use PHPUnit\Framework\TestCase;

class SongsTest extends TestCase{
    public $connection;

    public function setUp(): void
    {
        $this->connection = new \PDO('mysql:host=localhost;dbname=test_db', 'username', 'password');
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function testGetRows()
    {
        $song = new Songs($this->connection);
        $rows = $song->getRows();

        $this->assertCount(2, $rows);
        $this->assertEquals('Song 1', $rows[0]['title']);
        $this->assertEquals('Artist 1', $rows[0]['artist']);
        $this->assertEquals('Song 2', $rows[1]['title']);
        $this->assertEquals('Artist 2', $rows[1]['artist']);
    }
}

?>