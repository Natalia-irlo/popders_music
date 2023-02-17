<?php

require_once "../../vendor/autoload.php";
include '../../backend/app/connection/CrudConnection.php';
include '../../backend/app/controllers/Songs.php';
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
    $insertSong->$newCoder = $_POST['newcoder'];
    $newTitle = $_POST['newtitle'];
    $newArtist = $_POST['newartist'];
    $newGenre = $_POST['newgenre'];
    $newURL = $_POST['newurl'];

$newDate = date('Y-m-d H:i:s');
$newPlayed = false;

$insertSong = new Songs();
$insertSong->addRow($insertSong->$newCoder, $newTitle, $newArtist, $newGenre, $newURL, $newDate, $newPlayed);

    
if (isset($_POST['newCoder'])) {
    $Coder = $_POST['Coder'];
} else {
    $Coder = null;
}
if (isset($_POST['newTitle'])) {
    $Title = $_POST['newTitle'];
} else {
    $Title = null;
}
if (isset($_POST['newArtist'])) {
    $Artist = $_POST['newArtist'];
} else {
    $Artist = null;
}
if (isset($_POST['newGenre'])) {
    $Genre = $_POST['newGenre'];
} else {
    $Genre = null;
}
if (isset($_POST['newUrl'])) {
    $URL = $_POST['newUrl'];
} else {
    $URL = null;
}
if (isset($_POST['newDate'])) {
    $Date = $_POST['newDate'];
} else {
    $Date = null;
}
if (isset($_POST['newStatus'])) {
    $Status = $_POST['newStatus'];
} else {
    $Status = null;
}}
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
            <input id="coder" type="text" name="coder" value="<?= htmlspecialchars($songs['coder'], ENT_QUOTES) ?>" required>
        </p>
        <p>
            <label for="title">title</label>
            <input id="title" type="text" name="title" value="<?= htmlspecialchars($songs['title'], ENT_QUOTES) ?>" required>
        </p>
        <p>
            <label for="artist">Artist</label>
            <input id="artist" type="text" name="artist" value="<?= htmlspecialchars($songs['artist'], ENT_QUOTES) ?>" required>
        </p>
        <p>
            <label for="genre">Genre</label>
            <input id="genre" type="text" name="genre" value="<?= htmlspecialchars($songs['genre'], ENT_QUOTES) ?>" required>
        </p>
        <p>
            <label for="url">Url</label>
            <input id="url" type="text" name="url" value="<?= htmlspecialchars($songs['url'], ENT_QUOTES) ?>" required>
        </p>
        
        <p>
            <input type="submit" value="Guardar">
        </p>
    </form>
</body>
</html>