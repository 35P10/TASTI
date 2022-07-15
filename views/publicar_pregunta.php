<?php 
    session_start(); 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mi Perfil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Overlock SC' rel='stylesheet'>
        <link rel="stylesheet" href="css/general_style.css">
        <link rel="stylesheet" href="components/nav_bar.css">
        <link rel="stylesheet" href="css/publicar_pregunta.css">
        <link rel="stylesheet" href="components/pregunta.css">
    </head>
    <body>
        <header>
            <?php
            include 'components/nav_bar.php';
            ?>
        </header>
    <main class="main-usando-navbar ">
            <div class="publicar_pregunta">
            <h1>Publicar Pregunta</h1>
            <br/>
            <form action="">
                <div id="lateral">
                    <p>
                    <label for="">T&iacute;tulo</label>
                    <input type="text">
                    </p><br/>

                    <p>
                    <label for="">Tema</label>
                    <select name="transporte">
                    <option>Coche</option>
                    <option>Avión</option>
                    <option>Tren</option>
                    </select>
                    </p><br/>

                    <p>
                    <label for="">Horario Disponible</label>
                    <input type="time" value="12:00:00" max="22:30:00" min="7:00:00" step="1">
                    </p><br/>

                    <p>
                    <label for="">Fecha L&iacute;mite</label>
                    <input type="date">
                    </p><br/>
                </div>
                    
                <div id="principal">
                    <p>
                    <label for="">Curso</label>
                    <input type="text">
                    </p><br/>

                    <p class="input-file-wrapper">
                    <label class="descp" for="">Descripcion</label>
                    <textarea name="" id="" cols="30" rows="7"></textarea>
                    </p><br/>

                    <p class="boton">
                    <button>PREGUNTAR</button>
                    </p>
                </div>
            </form>
            </div>
    </main>


        <script src="" async defer></script>
    </body>

</html>