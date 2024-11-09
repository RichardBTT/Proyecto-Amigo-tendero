<?php
// Requerir NAVMENU
//require "../controller/assets/menunav.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini ChatBot con Menú de Navegación</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menú de Navegación</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Mini ChatBot</h2>
                <p>Este es un mini chatbot para responder preguntas relacionadas con Amigo Tendero.</p>
            </div>
            <div class="image-container">
      <img src="sss/AT%20concavo.png" alt="Logo Amiten" class="custom-image">
      <div class="text-container">
        <h5 style="color: white;">Ingrese los siguientes datos:</h5>
      </div>
        </div>
        
        <div class="chatbox">
            <div class="header">
                
            </div>
            
            <div class="body" id="chatbody">
                <p class="alicia">Hola! Soy MiniBot, estoy aquí para ayudarte con tus preguntas sobre Amigo Tendero.</p>
                <div class="scroller"></div>
            </div>

            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style="font-family: cursive; font-size: 20px;">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
            alert ("Tutoriales\n\nCaleb & Mr. Luna");
        }
    </SCRIPT>
</body>
</html>
