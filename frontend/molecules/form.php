<?php

require_once "../../vendor/autoload.php";

use App\Controllers\Songs;

// function required_validation($text): bool
// {
//     if (!empty($text)) {
//         return True;
//     } else {
//         echo '<script language="javascript" type="text/javascript">
//         alert("Introduzca datos");
//         window.location = "madesign.php";
//         </script>';
//         return False;
//     }
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $addIdCoder = filter_input(INPUT_POST, "coder");
    $addTitle = filter_input(INPUT_POST, "titulo");
    $addArtist = filter_input(INPUT_POST, "artist");
    $addGenre = filter_input(INPUT_POST, "genre");
    $addURL = filter_input(INPUT_POST, "url");

    $addDate = date('Y-m-d H:i:s');
    $addPlayed = false;

    $insertSong = new Songs;
    $insertSong->addRow($addIdCoder, $addTitle, $addArtist, $addGenre, $addURL, $addDate, $addPlayed);
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