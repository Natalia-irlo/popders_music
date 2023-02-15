<!DOCTYPE html>
<html lang="en">

<head>
  <title>Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="../../molecules/mol-date/mol-date-style.css"/>
 
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
                  <li id="fa-duotone fa-gear"></i>
                  <li ><img src=" " id="weather-icon" width="35px" /></li>
                  <li id="degrees">ºC</li>
                  <li id="date"></li>
              </ul>
      </div>
      <div id="display"></div>
  </header>
  <div class="table-home">
    <table class="table table-borderless">
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