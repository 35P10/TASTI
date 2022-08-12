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
    </head>
    <body>
        <style>
            <?php include __DIR__.'/css/programar_clase.css';?>
        </style>
        <header>
            <?php
                if(!isset($_SESSION['usersCUI'])){session_start();}
                include 'components/nav_bar.php';
            ?>
        </header>
        <main>
            <form class="formulario" method="POST" action="../controllers/pregunta.php">
                <h1>Programar Clase</h1>
                <input type="hidden" name="type" value="schedule_class">
                <input type="hidden" name="id_pregunta" value=<?php echo $_GET["id_pregunta"];?> />
                
                <label for="fecha">Fecha de Reunion</label>
                <br/>
                <input class="input-text" type="datetime-local" name="fecha" id="fecha">
                <br/><br/>
                <label for="meet">Meet</label>
                <br/>
                <input class="input-text" type="url" id="meet" name="meet">
                <br/><br/>
                <div class="form__tipo-reunion">      
                    <div class="form__tipo-reunion__1">             
                        <input class="input-checkbox" onchange="toggle_max_participantes()" id="tipo_reunion" name="tipo_reunion" type="checkbox">
                        <label name="privacidad" for="tipo_reunion">Sesi&oacute;n Privada</label>
                    </div>
                    <div class="form__tipo-reunion__2">
                        <label for="max_participantes">Max. Estudiantes</label>
                        <br/>
                        <input class="input-text" id="max_participantes" name="max_participantes" type="number" min="2" max="100" step="1">
                    </div>
                </div>
                <div class="button-box">
                    <button class="button button_aceptar" type="submit" name="submit">Programar</button>
                    <a class="button button_cancelar" href="../controllers/inicioController.php">Cancelar</a>
                </div> 
            </form>
        </main>
        <script>
            function toggle_max_participantes(){
                let input_number = document.getElementById("max_participantes");
                let hidden = input_number.getAttribute("disabled");
                if (hidden) {
                    input_number.removeAttribute("disabled");
                }
                else {
                    input_number.value="";
                    input_number.setAttribute("disabled", "disabled");
                }
            }
        </script>
    </body>

</html>