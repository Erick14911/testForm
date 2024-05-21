<!--@author:Erick14911-->
<!DOCTYPE html>
<?php
function connect(){
    $connection = new mysqli('localhost','root',"",'db_persona');
    if($connection->connect_errno){
        HEADER('Location: error.php');
    }else{
       mysqli_query($connection, "SET NAMES 'utf8'");
    //    $connection -> set_charset("utf8");
    }
    return $connection;
}
$connect2 = connect();
$sqlSelectReporte = "SELECT * FROM v_reporte_diario;";
$query = $connect2->query($sqlSelectReporte);
?>
<html lang="ES">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /> 
    <meta name="author" content="Erick De La Rosa" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-style-type" content="text/css" />  
    <link type="text/css" rel="stylesheet" href="assets/static/css/style.css">
    <script type="text/javascript" src="assets/static/js/script.js" defer></script><!--async--> 
    <title>Test</title>
  </head>
  <body>
    <main id="content">
      <header id="header">
        <hgroup id="hgroup">
          <h1 class="title">Test</h1>
        </hgroup>
      </header>
      <nav id="nav">
        <button id="btnRegistro" class="btn">Registro</button>
        <button id="btnConsulta" class="btn">Consulta</button>
      </nav>
     
      <section id="section" class="oculta">
<?php
require_once "templates/formulario.php";
?>
      </section>
      <section id="section2" class="oculta">
        <h1 class="title">Reporte</h1>
<?php
require_once "templates/tabla.php";
?>
      </section>
    </main>
  </body>
</html >
