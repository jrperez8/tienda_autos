<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Cinzel:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <link  rel="icon" href="images/r_rover1.jpg" type="image/jpg" />

    <style>
        .indie{
            font-family: 'Indie Flower', cursive;
        }
        .amatic{
            font-family: 'Amatic SC', cursive;
        }
        .cinzel{
            font-family: 'Cinzel', serif;
        }
        .montserrat{
          font-family: 'Montserrat', sans-serif;
        }
        input[type=text]:focus {
        background-color: WhiteSmoke;
        }
        input[type=text]:focus {
         border: 2px solid #555;
        }
        li a:hover, .dropdown:hover .dropbtn {
          background-color: teal;
          color: orangered !important;
          }  
        .footer-style {
          padding-top: 50px;
          background-color: #000000;
          }
        .pad-foot{
          padding-top: 15px;
        }   
        .footer-style2 {
          padding-top: 50px;
          background-color: white;
          }
          .carousel-inner img {
            width: 100%;
            max-height: 460px;
            }

          .carousel-inner{
            height: 420px;
            }        
    </style>
    <title>My Car ©</title>
</head>
<body>
<div class="container-fluid my-1">
  <nav class="navbar navbar-expand-lg navbar-dark rounded" style="background-color: #008080;">
    <a class="navbar-brand indie" href="index.php">
      <img src="images/logo1.png" width="100" height="60" class="d-inline-block align-medium" alt="" loading="lazy">
         Tu Auto, Tu Estilo de Vida</a>    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link montserrat h2" href="index.php"><i class="fas fa-home"></i> HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link montserrat h2" href="formulario.php"><i class="fas fa-tasks"></i> COMPRAR</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link montserrat h2" href="vehiculos.php"><i class="fas fa-id-card"></i> COTIZACIONES</a>
      </li>       
    </ul>      
  </div>
  </nav>
</div>     
<div class="container" style="background-color: #FFFAFA;">     
    <h2 class="display-3 amatic text-center">SOLICITA UNA COTIZACIÓN</h2>       
    <p class="font-weight-bold montserrat text-danger">1. Tu Información</p>        
    <form action="registrocoti.php" method="POST">        
         <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" placeholder="NombreCliente*" class="form-control form-control-lg shadow-sm" name="name_cli" required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="IdCliente*" class="form-control form-control-lg shadow-sm" name="id_cli" required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="CiudadCliente*" class="form-control form-control-lg shadow-sm" name="city_cli" required>
            </div>
            <div class="form-group col-md-6">
                <input type="email" placeholder="EmailCLiente*" class="form-control form-control-lg shadow-sm" name="email_cli"required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="Celular*" class="form-control form-control-lg shadow-sm" name="cel_cli"required>
            </div>
            
                                     
            <div class="form-group col-md-12">                 
               <textarea class="form-control form-control-lg shadow-sm" placeholder="Observaciones" name="descripcion"></textarea>                
            </div>
            <div class="form-group col-md-12">
              <div class="row mt-2">
                    <div class="col align-self-end">
                        <label class="font-weight-bold montserrat text-danger">2.Selecciona tu vehículo:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="foto" value="https://raw.githubusercontent.com/jrperez8/tienda_autos/main/images/c_camaro1.jpg">
                            <label class="form-check-label indie">Chevrolet Camaro SS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="foto" value="https://raw.githubusercontent.com/jrperez8/tienda_autos/main/images/c_blazer1.jpg">
                            <label class="form-check-label indie">Chevrolet Blazer RS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="foto" value="https://raw.githubusercontent.com/jrperez8/tienda_autos/main/images/d_charger1.jpg">
                            <label class="form-check-label indie ">Dodge Charger</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="foto" value="https://raw.githubusercontent.com/jrperez8/tienda_autos/main/images/d_chalenger1.jpg">
                            <label class="form-check-label indie ">Dodge Chalenger</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="foto" value="https://raw.githubusercontent.com/jrperez8/tienda_autos/main/images/r_rover1.jpg">
                            <label class="form-check-label indie">Range Rover</label>
                        </div>
                    </div>
                </div>
            </div>                   
            <div class="form-group col-md-12 text-center amatic">
                 <button class="center-block btn btn-outline-dark btn-lg cinzel" type="submit" value="REGISTRAR" name="registrar">Registre su Cotización
            </div>            
          </div> 
          </form> 
</div>  
<div class="container-fluid my-1">
 <footer class="page-footer my-1">
 <div class="container-fluid text-center text-md-left footer-style pad-foot montserrat rounded">  
  <div class="row text-white"> 
    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">      
      <h6 class="text-uppercase font-weight-bold" style="color: #008080;">MY CAR</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Somos importadores directos de autos y camionetas de lujo, así como de autobuses y motocicletas de alta gama</p>
    </div>   
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">     
      <h6 class="text-uppercase font-weight-bold" style="color: #008080;">Productos</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a class="dark-grey-text" href="formulario.php">Autos</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Autobuses</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Motocicletas</a>
      </p>
    </div>   
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">      
      <h6 class="text-uppercase font-weight-bold" style="color: #008080;">Enlaces</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a class="" href="index.php">Home</a>
      </p>
      <p>
        <a class="" href="formulario.php">Comprar</a>
      </p>
      <p>
        <a class="" href="vehiculos.php">Cotizaciones</a>
      </p>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      <h6 class="text-uppercase font-weight-bold" style="color: #008080;">Contacto</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p><i class="fas fa-home mr-3"></i> Medellín, Ant - Col</p>
      <p><i class="fas fa-envelope mr-3"></i> info@mycar.com</p>
      <p><i class="fas fa-phone mr-3"></i> + 07 (4) 444 00 11</p>      
    </div>
   </div>
</div>
<div class="footer-copyright text-center text-black py-1 my-1 footer-style2">© 2020 Copyright:
  <a class="" href="index.php"> mycar.com</a>
</div>
</footer>
</div>     
 </body>
</html>