<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table</title>
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

    <nav class="nav flex-column" id="drawer">
        <div class="container-drawer">
            <a href="" target="_blank" class="nav-link"  aria-current="page">
              <img class="icon-logo " src="../../assets/icons/logo-popCoder-multicolor.png" width="10px">
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
            <a href="" target="_blank" class="nav-link" aria-current="page">
                <img class="icon" src="../../assets/icons/icono-user.png" width="70px">
            </a>            
        </div>
    </nav>

    <a href="#" data-toggle="modal" data-target="#exampleModal" class="modal-add"><img src="../../assets/icons/add.png" class="add-song"></a>
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
                        <input type="text" name="coder" id="r-coder" class="plch" placeholder="">
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>
                        <sub class="txt">Title</sub>&#160;
                        <input  type="text" name="title" id="r-title" class="plch" placeholder="">
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>
                        
                        <sub class="txt">Artista</sub>&#160;
                        <input type="text" name="artist" id="r-artist" class="plch" placeholder="">
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>
                        
                        <sub class="txt">Genre</sub>&#160;
                        <input type="text" name="genre" id="r-genre" class="plch" placeholder="">
                        <small id="r-msg-pass" class="d-block text-danger"></small><br>
                        
                        <sub class="txt">Url</sub>&#160;&emsp;
                        <input type="text" name="url" id="r-url" class="plch" placeholder="">
                        <small id="r-msg-pass" class="d-block text-danger"></small>
                        <br>
                        <button class="btn" type="submit" >Submit</button>                                
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /><img src="../../assets/icons/edit.png" class="icon-edit"/></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                </tr>
                <tr>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                </tr>
                <tr>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                </tr>
                <tr>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                </tr>
                <tr>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                    <td><img className="Dos sm-2" src="../../assets/img/coder.png" height="60px" /></td>
                </tr>
            </tbody>
        </table>
    </div>    
</div>
<script src="../../molecules/mol-date/date.js"></script>     
</body>
</html>