<?php
include '../../../backend/app/connection/CrudConnection.php';
require "../../../backend/app/controllers/Coders.php";
require "../../../backend/app/controllers/Songs.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insertSong->$newCoder = $_POST['coder'];
    $newTitle = $_POST['titulo'];
    $newArtist = $_POST['artist'];
    $newGenre = $_POST['genre'];
    $newURL = $_POST['url'];;
}

$newDate = date('Y-m-d H:i:s');
$newPlayed = false;

$insertSong = new Songs();
$insertSong->addRow($newCoder, $newTitle, $newArtist, $newGenre, $newURL, $newDate, $newPlayed);

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--css para usar Bootstrap-->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
              <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
          <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
          <link rel="stylesheet" href="../mol-drawer/drawer.css">
          <link rel="stylesheet" type="text/css" href="../../molecules//mol-table/style.css" />
          <link rel="stylesheet" href="../../molecules/mol-date/mol-date-style.css"/>
              
        <title>table</title>
    </head>
    <body>
    
        <div class="container-drawer">
            <a href="" target="_blank" class="nav-link"  aria-current="page">
              <img class="icon-logo " src="../../assets/icons/logo-popCoder-multicolor.png" width="60px ">
            </a>
            <a href="" target="_blank" class="nav-link" aria-current="page">
                <img class="icon" src="../../assets/icons/icono-musica.png" width="70px">
            </a>
            <a href="" target="_blank" class="nav-link" aria-current="page">
                <img class="icon" src="../../assets/icons/icono-gatito.png" width="70px">
            </a>
            <a href="" target="_blank" class="nav-link" aria-current="page">
                <img class="icon" src="../../assets/icons/icono-patito.png" width="70px">
            </a>
            <a href="#" target="_blank" class="nav-link" aria-current="page" >
                <img class="icon" src="../../assets/icons/icono-user.png" width="70px">
            </a>
            
        </div>

    </nav>
    <div class="container-home"> 
    <header>
      <div class="container"> 
      <ul class="d-flex">
                    <li><span id="search-form" class="geolocations col-2">
                        <a href="#" id="geolocation"> 
                           
                        </a>
                        </span>
                      </li>
                    <li id="date"></li>
                    <li id="gear" class="fa-duotone fa-gear"></i>
                </ul>
            <div id="display"></div>

</header>
<div class="table-home">
     <table class="table table-borderless" action="table.php" method="post">
     <thead>
       <tr>
       </tr>
     </thead>
     <tbody>
       <br>
       <tr>
         <br>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
       </tr>
       <tr>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
       </tr>
       <tr>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
       </tr>
       <tr>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
       </tr>
       <tr>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
       </tr>
       <tr>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
         <td><img className="Dos sm-2" src="./../../assets/img/coder.png" height="45px" /></td>
       </tr>
     </tbody>
   </table>
   </div>
            </div>
</div>

    
        <script src="../../molecules/mol-date/date.js"></script>
        
    </body>
</html>













