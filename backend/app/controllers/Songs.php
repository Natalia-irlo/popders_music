<?php
use App\Connection\CrudConnection;
//require '/xampp/htdocs/popders_music/popders_music/backend/app/connection/CrudConnection.php';

class Songs extends CrudConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connectDatabase();
    }

    public function getRows()
    {
        $seeAllQuery = 'SELECT title, artist FROM song';
        foreach ($this->connection->query($seeAllQuery) as $row) {
            $rows[] = [
                'title' => $row['title'],
                'artist' => $row['artist']
            ];
        }
        return $rows;
    }

    public function addRow($id_coder, $title, $artist, $genre, $url, $date, $status)
    {
        $addRowQuery = "insert into song (id_coder,title,artist,genre,url,date,status) values ('$id_coder','$title' ,'$artist', '$genre', '$url', '$date', '$status')";
        $this->connection->query($addRowQuery);
        echo "Se ha insertado correctamente " . $title . "\n";
    }

    function updateRow($id_song, $id_coder, $title, $artist, $genre, $url, $date, $status)
    {
        $updateQuery = "UPDATE song
    SET id_coder ='$id_coder', title = '$title', artist = '$artist', genre = '$genre', url = '$url', date = '$date', status='$status'
    WHERE id_song = '$id_song' ";

        $this->connection->query($updateQuery);
        echo "Se ha modificado correctamente el " . $title . "\n";
    }

    function deleteRow($id_song)
    {
        $deleteQuery = "DELETE FROM song WHERE id_song = '$id_song'";
        $this->connection->query($deleteQuery);
        echo "Se ha eliminado correctamente " . $id_song . "\n";
    }
}

$movement = new Songs;
$movement->deleteRow(5);
var_dump($movement);