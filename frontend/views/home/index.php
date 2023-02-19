<?php

function getPhrase()
{
    $current_day = date('l');

    $motivation = [
        'Lunes con L de:Lograr tus objetivos',
        'Martes con M de:Magnífico día para todas',
        'Miércoles con M de:Mitad de semana, ¡vamos!',
        'Jueves con J de:Jamás rendirte',
        'Viernes con V de:Vámonos de juerga',
        'Sábado con s de:Sonríele a la vida',
        'Domingo con D de:Duerme todo el día'
    ];

    if ($current_day == "Monday") {
        $phrase = $motivation[0];
    } elseif ($current_day == "Tuesday") {
        $phrase = $motivation[1];
    } elseif ($current_day == "Wednesday") {
        $phrase = $motivation[2];
    } elseif ($current_day == "Thursday") {
        $phrase = $motivation[3];
    } elseif ($current_day == "Friday") {
        $phrase = $motivation[4];
    } elseif ($current_day == "Saturday") {
        $phrase = $motivation[5];
    } else {
        $phrase = $motivation[6];
    }
    return $phrase;
}

$phrase = getPhrase();
$line1 = strtok($phrase, ":");
$lines2and3 = strstr($phrase, ":");
$lines2and3_formatted = strtok($lines2and3, ":");
$line2 = strtok($lines2and3_formatted, " ");
$line3 = ltrim($lines2and3_formatted, $line2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="../../molecules/mol-date/mol-date-style.css"/>
    <link rel="stylesheet" href="../../molecules/mol-drawer/drawer.css"/>
    <title>Document</title>
</head>

<body>
    <div class="container-home">
        <header>
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
                    <li ><img src=" " id="weather-icon" width="35px" /></li>
                    <li id="degrees">ºC</li>
                    <li id="date"></li>
                </ul>
            </div>
            <div id="display"></div>
        </header>

        <nav class="" id="drawer">
            <div class="container-drawer">
                <a href="./index.php" target="_blank" class="nav-link"  aria-current="page">
                <img class="icon-logo" src="../../assets/icons/logo-popCoder-multicolor.png" width="60px">
                </a>
                <a href="../screen/screen.php" target="_blank" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-musica.png" width="70px">
                </a>
                <a href="../list/list.php" target="_blank" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-gatito.png" width="70px">
                </a>
                <a href="../trainers/trainers.php" target="_blank" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-patito.png" width="70px">
                </a>
                <a href="../coders/coders.php" target="_blank" class="nav-link" aria-current="page">
                    <img class="icon" src="../../assets/icons/icono-user.png" width="70px">
                </a>                
            </div>
        </nav>  

        <div class="home-center">
            <div class="content-piano">
                <img src="../../assets/img/home.jpg" alt="Piano" class="piano"/>
            </div>
            <div class="content-title">
                <p class="title-small"> <?php echo $line1; ?> </p>
                <h1 class="title-big"><?php echo $line2; ?></h1>
                <p class="title-small"><?php echo $line3; ?></p>
            </div>
        </div>

        <div class="img-footer">
            <img src="../../assets/img/austin-neill.jpg" alt="Concert" class="small-picture">
            <img src="../../assets/img/joshua-fuller.jpg" alt="Girl singing" class="small-picture">
            <img src="../../assets/img/keagan-henman.jpg" alt="Boy singing" class="small-picture">
            <img src="../../assets/img/marcela-laskoski.jpg" alt="Dj" class="small-picture">
        </div>
    </div>

    <script src="../../molecules/mol-date/date.js"></script>
</body>
</html>