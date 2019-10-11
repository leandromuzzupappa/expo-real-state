<?php

function checkbotonactivo( $nombrearchivo ) {
    
    $path = $_SERVER['PHP_SELF'];
    
    if ( basename($path)==$nombrearchivo ) {
        echo "activo";
    }
    
}

?>


<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Expo Real Estate México</title>
<meta name="description" content="El encuentro de inversiones en Real Estate más importante de la región. 29-30 de mayo 2019. Hyatt Regency, Polanco, Ciudad de México">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href="styles.css" rel="stylesheet" type="text/css">


</head>

<body>
	
	<div id="loading">
		<svg viewBox="0 0 70 70">
			<path class="st0" d="M35,69.5C16,69.5,0.5,54,0.5,35S16,0.5,35,0.5c1.4,0,2.5,1.1,2.5,2.5S36.4,5.5,35,5.5
			C18.7,5.5,5.5,18.7,5.5,35S18.7,64.5,35,64.5S64.5,51.3,64.5,35c0-2.3-0.3-4.7-0.8-7c-0.3-1.3,0.5-2.7,1.8-3s2.7,0.5,3,1.8
			c0.7,2.7,1,5.4,1,8.2C69.5,54,54,69.5,35,69.5z"/>
		</svg>
	</div>
	
	<div id="boton-menu-mobile">
        <svg viewBox="0 0 40 32" width="30" height="24">
            <rect class="st0" width="40" height="6"/>
            <rect y="13" class="st0" width="40" height="6"/>
            <rect y="26" class="st0" width="40" height="6"/>
        </svg>
    </div>

    <div id="menu-mobile">
        <div class="botones">

        </div>
    </div>

    <div id="top">
        <div class="container">

            <div class="colizq">
                <a class="logo" href="index.php"><img src="images/top_logo.png" alt="Expo Real Estate Mexico" width="167" /></a>
            </div><!--
            --><nav class="colder">
                <div class="boton">
                    <span class="botondesplegable">congreso</span>
                    <div class="desplegable">
                        <a href="congreso.php" class="<?php checkbotonactivo("congreso.php") ?>">Información general</a>
                        <a href="agenda.php" class="<?php checkbotonactivo("agenda.php") ?>">Agenda</a>
                        <a href="speakers.php" class="<?php checkbotonactivo("speakers.php") ?>">Speakers</a>
                    </div>
                </div>
                <div class="boton">
                    <span class="botondesplegable">exposición</span>
                    <div class="desplegable">
                        <a href="exposicion.php" class="<?php checkbotonactivo("exposicion.php") ?>">Información General</a>
                        <a href="workshops.php" class="<?php checkbotonactivo("workshops.php") ?>">Workshops</a>
                    </div>
                </div>
                <a href="sede.php" class="boton <?php checkbotonactivo("sede.php") ?>"><span>Sede</span></a>
                <a href="organizan.php" class="boton <?php checkbotonactivo("organizan.php") ?>"><span>Organizan</span></a>
                <!--<a href="prensa.php" class="boton"><span>Prensa</span></a>-->
                <a href="contacto.php" class="boton <?php checkbotonactivo("contacto.php") ?>"><span>Contacto</span></a>
                <div class="boton entradas">
                    <span class="botondesplegable">Entradas</span>
                    <div class="desplegable">
                        <a href="inscripcion-congreso.php" class="<?php checkbotonactivo("inscripcion-congreso.php") ?>">Congreso</a>
                        <a href="inscripcion-expo.php" class="<?php checkbotonactivo("inscripcion-expo.php") ?>">Exposición</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>