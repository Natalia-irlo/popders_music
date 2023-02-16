<?php

namespace App\Controllers;

use App\Connection\CrudConnection;

require "Coders.php";
require "Songs.php";


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
                $row['title'],
                $row['artist']
            ];
        }
        return $rows;
    }

    public function addRow($id_coder, $title, $artist, $genre, $url, $date, $status)
    {
        $addRowQuery = "insert into song (id_coder,title,artist,genre,url,date,status) values ('$id_coder','$title' ,'$artist', '$genre', '$url', '$date', '$status')";
        $resultAdd = $this->connection->query($addRowQuery);
        echo "Se ha insertado correctamente " . $title . "\n";
        if ($resultAdd){
            return true;
        }else {
            return false;
        }
    }

    // function updateRow($id_song, $id_coder, $title, $artist, $genre, $url, $date, $status)
    // {
    //     $updateQuery = "UPDATE song
    //     SET id_coder ='$id_coder', title = '$title', artist = '$artist', genre = '$genre', url = '$url', date = '$date', status='$status'
    //     WHERE id_song = '$id_song' ";

    //     $resultUpdate = $this->connection->query($updateQuery);
    //     echo "Se ha modificado correctamente el " . $title . "\n";
    //     if ($resultUpdate){
    //         return true;
    //     }else {
    //         return false;
    //     }
    // }
    function updateRow($coder ,$title, $artist, $genre, $url, $date, $status){
       

    if(isset($_POST["guardar"])){
        // Cuando se pulsa el botón guardar del formulario entra por esta rama
        echo "<p class='text-success mt-2 font-weight-bold'>¡SE HA ACCEDIDO DESDE EL FORMULARIO!</p>";

        // Debe comprobarse que las variables vienen informadas
        $coder = isset($_POST["coder"])? $_POST["coder"]:null;
        $title = isset($_POST["titulo"])? $_POST["titulo"]:null;
        $artist= isset($_POST["artist"])? $_POST["artist"]:null;
        $genre= isset($_POST["genre"])? $_POST["genre"]:null;
        $url= isset($_POST["url"])? $_POST["url"]:null;
        $date= isset($_POST["date"])? $_POST["date"]:null;
        $status= isset($_POST["status"])? $_POST["status"]:null;

        if (is_null($coder) || is_null($title) || is_null($artist)) {
            echo "<p class='text-danger mt-2 font-weight-bold'>¡CAMPOS SIN INFORMAR!</p>";
        }

        // Comprueba si existe el usuario que va a añadir una canción
        $id_Coder = $conn_coders->existeCoder($coder);
        

        if ($id_Coder) {
            // Si ya existe no se hace nada
            echo "<p class='text-success'>-- El coder {$id_Coder}:{$coder} ya existe en la BD</p>";
            $seguir = true;
        }else {
            // Si no existe se añade a la BD
            echo "<p class='text-danger'>-- El coder {$coder} no existe en la BD: ";

            $seguir = $conn_coders->addRow($coder);
            if ($seguir) {
                echo " <span class='text-success'>Se ha añadido a {$coder} a la BD</span></p>";
                // Recuperar el id del nuevo usuario para poder añadir la canción
                $id_Coder = $conn_coders->existeCoder($coder);
            }else {
                echo " <span class='text-danger'>Error al crear el coder {$coder}</span></p>";
            }
        }
        
       
        // Si el usuario es correcto se añade la canción
        if ($seguir) {
            $date = date("Y-m-d H:i:s");
            $status = 1;
            // Añadir canción
            $insertarCancion = $conn_songs->addRow2($id_Coder, $title, $artist, $genre, $url, $date, $status);
            if ($insertarCancion) {
                echo "<p class='text-success'>-- {$coder} ha añadido {$title} de {$artist}</p>";
            } else {
                echo "<p class='text-danger'>-- {$coder} NO HA PODIDO añadir {$title} de {$artist}</p>";
            }
        }

    }
    else {
        // Si accedemos al archivo sin pasar por el formulario
        echo "<p class='text-danger mt-2 font-weight-bold'>¡¡NO SE HA ACCEDIDO DESDE EL FORMULARIO!!</p>";
    }}

    function deleteRow($id_song)
    {
        $deleteQuery = "DELETE FROM song WHERE id_song = '$id_song'";
        $resultDelete = $this->connection->query($deleteQuery);
        echo "Se ha eliminado correctamente " . $id_song . "\n";
        if ($resultDelete){
            return true;
        }else {
            return false;
        }
    }
}
