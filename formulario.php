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
    <div class="container p-4">     
     <h1 class="display-2 indie text-danger text-center">AUTOS LUXURY</h1> 
         <h2 class="display-4 amatic text-center">ADMINISTRACIÓN DE PRODUCTOS</h2>
         <br>
    <form action="registrocoti.php" method="POST">        
         <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" placeholder="NombreProducto" class="form-control form-control-lg shadow-sm" name="nombre_pro" required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" placeholder="MarcaProducto" class="form-control form-control-lg shadow-sm" name="marca_pro"required>
            </div>
            <div class="form-group col-md-12">
                <input type="text" placeholder="$PrecioProducto" class="form-control form-control-lg shadow-sm" name="precio_pro"required>
            </div> 
            <div class="form-group col-md-12">                 
               <textarea class="form-control form-control-lg shadow-sm  " placeholder="Descripción" name="descripcion"></textarea>                
            </div>          
            <div class="form-group col-md-12 text-center amatic">
                 <button class="center-block btn btn-outline-dark btn-lg cinzel" type="submit" value="REGISTRAR" name="registrar">Registrar
            </div>            
          </div> 
          </form> 
    </div>        
  </body>
</html>