<?php

require_once "../../../vendor/autoload.php";

use App\Controllers\Songs;
use App\Controllers\Coders;


$insertCoder = new Coders;
$insertSong = new Songs;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // $addNameCoder = isset($_POST["coder"])? $_POST["coder"]:null;
    // $addTitle = isset($_POST["title"])? $_POST["title"]:null;
    // $addArtist= isset($_POST["artist"])? $_POST["artist"]:null;
    // $addGenre= isset($_POST["genre"])? $_POST["genre"]:null;
    // $addURL= isset($_POST["url"])? $_POST["url"]:null;

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
    <title>Coders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="popup.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="coders.css">

<body>
    <div class="container-coders">
        <header class="header-container">
            <div class="container">
                <ul class="d-flex">
                    <li><span id="search-form" class="geolocations col-2">
                            <a href="#" id="geolocation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFBE02" class="bi bi-geo-alt-fill text-center" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </a>
                        </span>
                    </li>
                    <li id="city" class="city"></li>
                    <li id="fa-duotone fa-gear"></i>
                    <li><img src=" " id="weather-icon" width="35px" /></li>
                    <li id="degrees">ºC</li>
                    <li id="date"></li>
                </ul>
            </div>
            <div id="display"></div>
        </header>
       <div class='row'>
        <div class='col-2'>
        <nav class="nav flex-column" id="drawer">
            <div class="container-drawer">
                <a href="../../../index.php" target="_self" class="nav-link" aria-current="page">
                    <img class="icon-logo " src="../../assets/icons/logo-popCoder-multicolor.png" width="10px">
                </a>
                <a href="../screen/screen.php" target="_self" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-musica.png" width="70px">
                </a>
                <a href="./codersImg.php" target="_self" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-gatito.png" width="70px">
                </a>
                <a href="../trainers/trainers.php" target="_self" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-patito.png" width="70px">
                </a>
                <a href="../list/list.php" target="_self" class="nav-link" aria-current="page" data-toggle="modal" data-target="#exampleModal">
                    <img class="icon" src="../../assets/icons/icono-user.png" width="70px">
                </a>
            </div>
        </nav>
        </div>
        <div class='col-10'>
        <div class="codersGroup">
            <div class='containerImg'>
                <div class="" id="coders-group">
                    <?php
                    $song = new Songs();
                    $list = $song->getRows();
                    for ($i = 0; $i < 1; $i++) {
                        $row = $list[$i];
                    ?>
                        <td>
                            <img class='avatar' src='./avatares/diana.png' alt='avatar' />
                            <p class='song'><?php echo $row[0]; ?></p>
                            <p class='song'><?php echo $row[1]; ?></p>
                            <p class='song'><?php echo $row[2]; ?></p>
                        </td>
                    <?php } ?>
                    </tbody>
                </div>
                <div class="table table-borderless" id="coders-group">

                    <?php
                    $song = new Songs();
                    $list = $song->getRows();
                    for ($i = 0; $i < 1; $i++) {
                        $row = $list[$i];
                    ?>
                        <td>
                            <img class='avatar' src='./avatares/sharon.png' alt='avatar' />
                            <p class='song'><?php echo $row[0]; ?></p>
                            <p class='song'><?php echo $row[1]; ?></p>
                            <p class='song'><?php echo $row[2]; ?></p>
                        </td>
                    <?php } ?>
                    </tbody>
                </div>
            </div>
            <div class='containerImg'>
                <div class="table table-borderless" id="coders-group">

                    <?php
                    $song = new Songs();
                    $list = $song->getRows();
                    for ($i = 0; $i < 1; $i++) {
                        $row = $list[$i];
                    ?>
                        <td>
                            <img class='avatar' src='./avatares/meena.png' alt='avatar' />
                            <p class='song'><?php echo $row[0]; ?></p>
                            <p class='song'><?php echo $row[1]; ?></p>
                            <p class='song'><?php echo $row[2]; ?></p>
                        </td>
                    <?php } ?>
                    </tbody>
                </div>
                <div class="table table-borderless" id="coders-group">

                    <?php
                    $song = new Songs();
                    $list = $song->getRows();
                    for ($i = 0; $i < 1; $i++) {
                        $row = $list[$i];
                    ?>
                        <td>
                            <img class='avatar' src='./avatares/natalia.png' alt='avatar' />
                            <p class='song'><?php echo $row[0]; ?></p>
                            <p class='song'><?php echo $row[1]; ?></p>
                            <p class='song'><?php echo $row[2]; ?></p>
                        </td>
                    <?php } ?>
                    </tbody>
                </div>
                <div class="table table-borderless" id="coders-group">

                    <?php
                    $song = new Songs();
                    $list = $song->getRows();
                    for ($i = 0; $i < 1; $i++) {
                        $row = $list[$i];
                    ?>
                        <td>
                            <img class='avatar' src='./avatares/gabriela.png' alt='avatar' />
                            <p class='song'><?php echo $row[0]; ?></p>
                            <p class='song'><?php echo $row[1]; ?></p>
                            <p class='song'><?php echo $row[2]; ?></p>
                        </td>
                    <?php } ?>
                    </tbody>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <script src="../../molecules/mol-date/date.js"></script>
    <script src="frontend/views/list/searchBar.js"></script>
</body>

</html>