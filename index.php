<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="./lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    -->
    
    <link href="./lib/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sorteio.css">
    <link href="./lib/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <title>Formulário de sorteio</title>
  </head>

  <script type="text/javascript">
  	 /*
  	 const validarData = (p)=>{
      alert("aqui");  
      console.log(p.value());
     };
     */

  </script>
  <body>
  	<?php
	include_once(__DIR__."/action/sorteioAction.php");
	?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    -->
    <script src="./lib/jquery/jquery-3.6.0.min.js"></script>
    <script src="./lib/popper/popper.min.js"></script>
    <!--
    <script src="./lib/bootstrap/bootstrap.min.js"></script>
     -->
    <script src="./lib/bootstrap-4.2.1/js/bootstrap.min.js"></script>
    <script src="./lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="./lib/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <script type="text/javascript" src="sorteio.js"></script>
  </body>
</html>