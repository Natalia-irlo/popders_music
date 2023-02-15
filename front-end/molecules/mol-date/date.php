<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./mol-date-style.css" />
    <title>Weather App</title>
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
</body>

</html>