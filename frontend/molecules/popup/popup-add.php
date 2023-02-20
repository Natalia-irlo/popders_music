<?php

require_once "../../../vendor/autoload.php";

use App\Controllers\Songs;
use App\Controllers\Coders;

$insertCoder = new Coders;
$insertSong = new Songs;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $addNameCoder = filter_input(INPUT_POST, "coder");
    $addTitle = filter_input(INPUT_POST, "title");
    $addArtist = filter_input(INPUT_POST, "artist");
    $addGenre = filter_input(INPUT_POST, "genre");
    $addURL = filter_input(INPUT_POST, "url");

    $id_Coder = $insertCoder->existsCoder($addNameCoder);

    if ($id_Coder) {
        $go = true;
    } else {
        $go = $insertCoder->addRow($addNameCoder);
    }

    if ($go) {
        $id_Coder = $insertCoder->existsCoder($addNameCoder);
    } else {
        $go = false;
    }

    if ($go) {
        $addDate =  date("Y-m-d H:i:s");
        $addPlayed = 0;


        $insertSong->addRow($id_Coder, $addTitle, $addArtist, $addGenre, $addURL, $addDate, $addPlayed);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pop-Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="popup.css" />
</head>

<body>

    <a href="#" data-toggle="modal" data-target="#exampleModal">Add song</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header-sm">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form text-center">
                    <form action="#" method=post>
                        <h1>Add Song</h1>

                        <sub class="txt">Coder</sub>&#160;
                        <input type="text" name="coder" id="coder" class="plch" placeholder="" required>
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>
                        <sub class="txt">Title</sub>&#160;
                        <input type="text" name="title" id="title" class="plch" placeholder="" required>
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>

                        <sub class="txt">Artista</sub>&#160;
                        <input type="text" name="artist" id="artist" class="plch" placeholder="" required>
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>

                        <sub class="txt">Genre</sub>&#160;
                        <input type="text" name="genre" id="genre" class="plch" placeholder="" required>
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>

                        <sub class="txt">Url</sub>&#160;&emsp;
                        <input type="text" name="url" id="url" class="plch" placeholder="" required>
                        <small id="r-msg-pass" class="d-block text-danger"></small>
                        <br>
                        <sub class="txt">Url</sub>&#160;&emsp;
                        <input type="file" name="img" id="img" class="plch" placeholder="" required>
                        <small id="r-msg-pass" class="d-block text-danger"></small>
                        <br>
                        <button class="btn" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Modal -->

</body>

</html>