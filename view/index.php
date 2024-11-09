<?php

setlocale(LC_ALL, "es_ES");
$modulo = "Formulario";
$nav = '0';

require_once "../controller/assets/svrurl.php";
require_once "../controller/assets/validacion.php";
require_once "../controller/assets/inicio.php";

//Validacion de login
$login = new seguridad;
$login->seguridadLogin();

require_once "../controller/assets/session.php";

?>
<!-- Usuario -->
<a id="tipodeusuario" class="hide"><?php echo $pm_tipo ?></a>
<!-- Usuario -->
<?php
////Requer$apiKey = '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'; // Reemplaza 'tu-api-key' con tu verdadera API key de OpenAIir NAVMENU 
require "../controller/assets/menunav.php";
?>

<!-- BODDY -->
<div id="bodysecon" class="row"> 
  <h1>Hola</h1>
  <div class="imagen">
  <img src="../sss/277245179_4848876501814758_1494510260005304053_n.jpg" ,alt="Imagen ", class="image-container">
  <style>
    .image-container {
      position: relative;
      width: 40%;
    }

    .image-container img {
      max-width: 5%; /* Ajusta el tamaño máximo de la imagen */
      max-height: 5%; /* Ajusta el tamaño máximo de la imagen */
      width: auto;
      height: auto;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    </style>
</div>


<!--Datos-->
<!-- BODDY -->
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48070845.js"></script>
<!-- End of HubSpot Embed Code -->
<!-- SCRIPTS CARGA -->
<?php
require_once "../controller/assets/scripts.php";
?>
<!-- SCRIPTS CARGA -->

<!-- SCRIPTS -->
<script>


</script>
<!-- SCRIPTS  -->


<!-- Fin HTML -->
<?php
require_once "../controller/assets/fin.php";
?>