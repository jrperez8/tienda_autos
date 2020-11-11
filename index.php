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
        input[type=text]:focus {
        background-color: WhiteSmoke;
        }
        input[type=text]:focus {
         border: 2px solid #555;
        }
        li a:hover, .dropdown:hover .dropbtn {
          background-color: black;
          color: orangered !important;
          }
             
    </style>
    <title>Autos Luxury</title>
</head>
<body>
<div class="container my-1">
  <nav class="navbar navbar-expand-lg navbar-dark rounded" style="background-color: #000000;">
    <a class="navbar-brand indie" href="index.php">
      <img src="images/d_charger1.jpg" width="100" height="60" class="d-inline-block align-medium" alt="" loading="lazy">
         AUTOS LUXURY
    </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link indie h1" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link indie h1" href="formulario.php">REGISTRO</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link indie h1" href="vehiculos.php">COTIZACIONES</a>
      </li>       
    </ul>   
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
  </form> 
  </div>
  </nav>
</div>    
    <div class="container ">   
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/portada.jpg" class="d-block w-100 rounded" alt="Chevrolet Blazer 2020">
      <div class="carousel-caption d-none d-md-block carousel">
        <h1 class="display-1 indie" style="color: DarkRed;" >AUTOS LUXURY</h1>
        <p class="display-3 amatic">Bienvenidos</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/c_blazer1.jpg" class="d-block w-100 rounded" alt="Chevrolet Camaro 2020">
      <div class="carousel-caption d-none d-md-block">
        <h5>Chevrolet Blazer RS 2020</h5>
        <p>Creada para lograr todo lo que te propones</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/c_camaro1.jpg" class="d-block w-100 rounded" alt="Dodge Challenger 2020">
      <div class="carousel-caption d-none d-md-block">
        <h5>Chevrolet Camaro Six SS</h5>
        <p>La realidad nunca fue tan poderosa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/d_chalenger1.jpg" class="d-block w-100 rounded" alt="Dodge Challenger 2020">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dodge Challenger STR HELLCAT</h5>
        <p>Potencia Superior</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
     
    </div>        
  </body>
</html>