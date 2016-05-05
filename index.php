<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="img/icono4.png">
    <title>Wold Comunicaciones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Google fonts-->
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700' />

  </head>

  <body>
    <header class="header">
      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <h1>WOLD</h1>
              <h5>COMUNICACIONES</h5>
            </div>
          </div>
        </div>
    </header>
    <div class="main">
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
              <h2>Modulo de Ingreso</h2>
            </div>
          </div>
        <div class="row">
           <form class="form" method="POST" action="modelo/mcontrol.php">
            <h4 class="heading">Por favor ingrese los datos</h4>
            <div class="col-xs-12 col-md-12">
                <p>Nombre de Usuario:</p>
            </div>
            <div class="col-xs-12 col-md-12">
              <input id="ingreso" type="text" name="user" placeholder="Username" required></input>
            </div>
            <div class="col-xs-12 col-md-12">
                <p>Clave de Acceso:</p>
            </div>
            <div class="col-xs-12 col-md-12">
              <input id="ingreso" type="password" name="pass" placeholder="Password" required></input>
            </div>
            <div class="col-xs-12 col-md-12">
              <button type="submit" class="btn" value="Ingresar">Ingresar</button>
            </div>
             <div>
                <?php
                    $erroring = isset($_GET['errorusuario']) ? $_GET['errorusuario']:NULL;
                    if(strcmp($erroring, "si")==0)
                    {
                        echo "<script>alert('Datos incorrectos, verifique e intente de nuevo!')</script>";
                    }
                ?>
              </div>
          </form>
        </div>
      </div>
    </div>   
    <footer class="footer">
      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-12">
            
            </div>
          </div>
        </div>
    </footer>
     <!-- jQuery -->
    <script src="js/jquery-1.9.1.js"></script>

  </body>
</html>
