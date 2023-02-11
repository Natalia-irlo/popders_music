<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pop-Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>

<body>

<style>
    .btn{
    align-items: center;
    border-radius: 18%;
    color: white;
    width: 110px;
    height: 30px;
    background: linear-gradient(0.25turn, #fac832, #fa63d2, #9d74bf, #52e7fb, #357fbd, #2f5efc);
    }
    .modal-content{
        background: linear-gradient(#3887b1, #fcfcfc);
        opacity: .9;
        width: 350px;  
        height: auto;
        margin-top: 150px;
        
}
h1{
    color: #fcfcfc;
}
.txt{
    color:white;
    font-size: 18px;
    text-align: center;
   position: relative;
}
.plch{
    height: 20px;
    width: 230px;
    position: relative;
}


</style>
    
            
            <a href="#" data-toggle="modal" data-target="#exampleModal">Submit</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                                <sub class="txt">Titulo</sub>&#160;
                                <input  type="text" name="title" id="r-title" class="plch" placeholder="">
                                <small id="r-msg-pass" class="d-block text-danger"></small><br>
                               
                                <sub class="txt">Artista</sub>&#160;
                                <input type="text" name="artist" id="r-artist" class="plch" placeholder="">
                                <small id="r-msg-pass" class="d-block text-danger"></small><br>
                                
                                <sub class="txt">Genre</sub>&#160;
                                <input type="text" name="genre" id="r-genre" class="plch" placeholder="">
                                <small id="r-msg-pass" class="d-block text-danger"></small><br>
                               
                                <sub class="txt">Avatar</sub>&#160;
                                <input type="text" name="avatar" id="r-avatar" class="plch" placeholder="">
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
    </div>





    <!-- End Modal -->
</body>

</html>