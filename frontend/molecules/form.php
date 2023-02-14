<?php

require_once "../../vendor/autoload.php";
use App\Controllers\Songs;

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}*/

$newCoder = $_POST['coder'];
$newTitle = $_POST['titulo'];
$newArtist = $_POST['artist'];
$newGenre = $_POST['genre'];
$newURL = $_POST['url'];;
$newDate = date('Y-m-d H:i:s');
$newPlayed = false;

$insertSong = new Songs;
$insertSong->addRow($newCoder, $newTitle, $newArtist, $newGenre, $newURL, $newDate, $newPlayed);

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
            <input id="coder" type="text" name="coder" value="<?= $newCoder['coder'] ?>">
        </p>
        <p>
            <label for="titulo">Titulo</label>
            <input id="titulo" type="text" name="titulo" value="<?= $newTitle['titulo'] ?>">
        </p>
        <p>
            <label for="artist">Artist</label>
            <input id="artist" type="text" name="artist" value="<?= $newArtist['artist'] ?>">
        </p>
        <p>
            <label for="genre">Genre</label>
            <input id="genre" type="text" name="genre" value="<?= $newGenre['genre'] ?>">
        </p>
        <p>
            <label for="url">Url</label>
            <input id="url" type="text" name="url" value="<?= $newURL['url'] ?>">
        </p>
        <p>
            <input type="submit" value="Guardar">
        </p>
    </form>
</body>

</html>