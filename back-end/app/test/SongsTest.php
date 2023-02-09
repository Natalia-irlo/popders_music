<?php

class TestSongs extends TestCase
{
    function test_addRow(){
        
       $insertSong = new Songs;                       
       $datosEsperados = [
            "id_coders" => 1,
            "title" => "Volare",
            "artist" => "Danny Ocean",
            "genre" => "Reggaeton",
            "URL" => "www.canción.com",
            "date" => 20-02-2022,
            "status" => true
       ];
    
        $datos_salida_reales= $insertSong->addRow(['id_coder'], $data['title'], $data['artist'], $data['genre'], $data['url'], $data['date'], $data['status']);
       
        $sql = "SELECT * FROM playlist WHERE id_coders = 1 AND title = 'Test title' AND artist = 'Test artist' AND genre = 'Test genre' AND url = 'Test URL' AND date = 'Test date' AND status = 'Test status'";
        $results = $this->connection->query($sql);
        
        // Luego debes comparar los resultados con los valores esperados
        $this->assertEquals(count($results), 1);
        $result = $results[0];
        $this->assertEquals($result['id_coders'], $data['id_coder']);
        $this->assertEquals($result['title'], $data['title']);
        $this->assertEquals($result['artist'], $data['artist']);
        $this->assertEquals($result['genre'], $data['genre']);
        $this->assertEquals($result['url'], $data['url']);
        $this->assertEquals($result['date'], $data['date']);
        $this->assertEquals($result['status'], $data['status']);
        //Assert : Comprobar /comparar el escenario
       // $this->assertEquals($datos_salida_esperados = $datos_salida_reales);
    }
         
}
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

?> 