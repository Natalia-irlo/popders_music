<?php

require_once "../../../vendor/autoload.php";

//require_once "../../../vendor/autoload.php";

use App\Controllers\Songs;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://www.youtube.com/player_api"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://unpkg.com/axios/dist/axios.min.js" />
    <link rel="stylesheet" href="css/video-js.css">
    <script src="js/video.js"></script>
    <link rel="stylesheet" href="./screen.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <ul class="d-flex">
               <li><span id="search-form" class="geolocations col-2">
                      <a href="#" id="geolocation">
                       <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFBE02"
                           class="bi bi-geo-alt-fill text-center" viewBox="0 0 16 16">
                           <path
                               d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                       </svg>
                     </a>
                   </span>
               </li>
               <li id="city" class="city"></li>
               <li id="fa-duotone fa-gear"></i>
               <li ><img src=" " id="weather-icon" width="35px" /></li>
               <li id="degrees">ºC</li>
               <li id="date"></li>
           </ul>
   </div>
   
    <div id="display"></div>
    <script src="./date.js"></script>
    <div class="screen-wv">
    <nav class="nav flex-column" id="drawer">
        <div class="container-drawer">
            <a href="../home/index.php" target="_self" class="nav-link"  aria-current="page">
              <img class="icon-logo " src="../../assets/icons/logo-popCoder-multicolor.png" width="70px">
            </a>
            <a href="../screen/screen.php" target="_self" class="nav-link" aria-current="page">
                <img class="icon" src="../../assets/icons/icono-musica.png" width="70px">
            </a>
            <a href="../list/list.php" target="_self" class="nav-link" aria-current="page">
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
        <div class="container-screen">
            <?php
            $song = new Songs;
            $dataUrl = $song->getRows();
            // for ($i = 0; $i < 1; $i++) {
            //     $row =  $dataUrl[$i];
            //     $url = $row[2];
            // }
            $row =  $dataUrl[2];
            echo $row[2];
            ?>
            <div class="row text-center">
                <div class="col-6">
                <div class="video-responsive">
                            <iframe src="<?php echo $row[2]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>
                </div>

                <div class="col-6 text-center">
                   
                </div>
            </div>
            <script src="../../molecules/mol-date/date.js"></script>
        </div>
    </div>
</body>

</html>