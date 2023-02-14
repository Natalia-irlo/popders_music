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
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="../../molecules/mol-date/mol-date-style.css"/>
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

    
        <div class="drawer">
            <p>AQUI <br>
            VA <br> 
            EL <br>
            MENU
            </p>
        </div>

        <div class="home-center">
            <div class="content-piano">
                <img src="../../assets/img/home.jpg" alt="Piano" class="piano"/>
            </div>
            <div class="content-title">
                <p class="title-small">-Lunes con L de-</p>
                <h1 class="title-big">Lograr</h1>
                <p class="title-small">Todos tus objetivos</p>
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