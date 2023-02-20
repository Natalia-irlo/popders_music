<?php 
require_once "../../../vendor/autoload.php";

use App\Controllers\Songs;
use App\Controllers\Coders;

$updateCoder = new Coders;
$updateSong = new Songs;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $updateNameCoder = filter_input(INPUT_POST, "coder");
    $updateTitle = filter_input(INPUT_POST, "title");
    $updateArtist = filter_input(INPUT_POST, "artist");
    $updateGenre = filter_input(INPUT_POST, "genre");
    $updateURL = filter_input(INPUT_POST, "url");

    $id_Coder = $updateCoder->existsCoder($updateNameCoder);

    if ($id_Coder) {
        $go = true;
    } else {
        $go = $updateCoder->addRow($updateNameCoder);
    }

    if ($go) {
        $id_Coder = $updateCoder->existsCoder($updateNameCoder);
    } else {
        $go = false;
    }

    if ($go) {
        $updateDate =  date("Y-m-d H:i:s");
        $updatePlayed = 0;


        $updateSong->updateRow($id_Coder, $updateTitle, $updateArtist, $updateGenre, $updateURL, $updateDate, $updatePlayed, $updateSong);
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
    <link rel="stylesheet" type="text/css" href="edit.css" />
</head>
<body>
    <a href="#" data-toggle="modal" data-target="#exampleModal">Edit song</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form text-center">
                    <form action="#" method="post">
                        <h1>Editor</h1>
                        <sub class="txt">Coder</sub>&#160;
                        <input type="text" name="coder" id="r-coder" class="plch" placeholder="">
                        <small id="r-msg-coder" class="d-block text-danger"></small><br>
                        <sub class="txt">Title</sub>&#160;
                        <input type="text" name="title" id="r-title" class="plch" placeholder="">
                        <small id="r-msg-title" class="d-block text-danger"></small><br>
                        <sub class="txt">Artist</sub>&#160;
                        <input type="text" name="artist" id="r-artist" class="plch" placeholder="">
                        <small id="r-msg-artist" class="d-block text-danger"></small><br>
                        <sub class="txt">Genre</sub>&#160;
                        <input type="text" name="genre" id="r-genre" class="plch" placeholder="">
                        <small id="r-msg-genre" class="d-block text-danger"></small><br>
                        <sub class="txt">Avatar</sub>&#160;
                        <input type="text" name="avatar" id="r-avatar" class="plch" placeholder="">
                        <small id="r-msg-avatar" class="d-block text-danger"></small><br>
                        <sub class="txt">URL</sub>&#160;&emsp;
                        <input type="text" name="url" id="r-url" class="plch" placeholder="">
                        <small id="r-msg-url" class="d-block text-danger"></small><br>
                        <button class="btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</body>

</html>