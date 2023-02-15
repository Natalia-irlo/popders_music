<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\Songs;
use App\Controllers\Coders;

$conn_coders = new Coders();
$conn_songs = new Songs();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $coder = isset($_POST['coder']) && !empty($_POST['coder']) ? $_POST['coder'] : null;
    $title = isset($_POST['title']) && !empty($_POST['title']) ? $_POST['coder'] : null;
    $artist = isset($_POST['artist']) && !empty($_POST['artist']) ? $_POST['coder'] : null;
    $genre = isset($_POST['genre']) && !empty($_POST['genre']) ? $_POST['coder'] : null;
    $url = isset($_POST['url']) && !empty($_POST['url']) ? $_POST['coder'] : null;

    if (is_null($coder) || is_null($title) || is_null($artist)) {
        echo "Faltan datos por rellenar";
    }

    $idCoder = $conn_coders->existsCoder($coder);

    if ($idCoder) {
        $continue = true;
        echo "El coder {$idCoder}:{$coder} ya existe en la base de datos.";
    } else {
        echo "El coder {$coder} no existe en la base de datos.";
    }

    $continue = $conn_coders->addRow($coder);
    if ($continue) {
        echo "Se ha añadido a {$coder} a la base de datos.";
        $idCoder = $conn_coders->existsCoder($coder);
    } else {
        echo "Error al crear {$coder} en la base de datos.";
    }

    if ($continue) {
        $date = date('Y-m-d H:i:s');
        $status = 1;
    }
    $insertSong = $conn_songs->addRow($coder, $title, $artist, $genre, $url, $date, $status);
    if ($insertSong) {
        echo "{$coder} ha añadido {$title} del artista {$artista}.";
    } else {
        echo "{$coder} no ha podido añadir la canción {$title}.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
</head>

<body>
    <form action="form.php" method="post">
        <p>
            <label for="coder">Coder</label>
            <input id="coder" type="text" name="coder">
        </p>
        <p>
            <label for="titulo">Titulo</label>
            <input id="titulo" type="text" name="titulo">
        </p>
        <p>
            <label for="artist">Artist</label>
            <input id="artist" type="text" name="artist">
        </p>
        <p>
            <label for="genre">Genre</label>
            <input id="genre" type="text" name="genre">
        </p>
        <p>
            <label for="url">Url</label>
            <input id="url" type="text" name="url">
        </p>
        <p>
            <button>Guardar</button>
        </p>
    </form>
</body>

</html>