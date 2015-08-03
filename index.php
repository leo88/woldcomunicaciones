<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba_cs</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	              <li class="active"><a href="index.php">Home</a></li>
	              <li><a href="index.php?pag=2">clientes</a></li>
	              <li><a href="index.php?pag=3">producto</a></li>
	              <li><a href="index.php?pag=5">minutos</a></li>
	            </ul>
	           
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
      	</nav>	
    </div>
    <div class="container">  		
		<h1>Apuestas Copa America</h1>
		<?php
			$page = isset($_GET['pag']) ? $_GET['pag'] : NULL;
			if ($page == 2) 
			{
                include("vista/vcliente.php");
			}
            if ($page == 3) 
			{
                include("vista/vproducto.php");
			}
            if ($page == 4) 
			{
                include("vista/vactuproducto.php");
			}
            if ($page == 5) 
			{
                include("vista/vminutos.php");
			}
		?>
	</div>
</body>
</html>