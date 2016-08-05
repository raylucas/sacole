<!DOCTYPE html>
<html lang="pt-br" ng-app="scle">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCLE</title>

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
	
	<!--<div ng-include="'view/menu.html'"></div>-->
	
	<div ng-include="'view/menu.html'"></div>
 
	<div class="container" ng-controller="MainController">

  <h2>Consulta de Depósitos</h2>
    <br />
    <div class="">
      <table class="table table-striped table-responsive table-hover">
        <tr>
          <th>Categoria</th>
          <th>Quantidade</th>
        </tr>
        <tr ng-repeat="deposito in depositos">
          <td>{{deposito.categoria}}</td>
          <td>{{deposito.qnt}}</td>
        </tr> 

       
      </table>
    </div>














						<!--	<form method="post" action="operador.php">
							    <p>
							        <input type="submit" name="consulta" value="Consultar Deposito" />
							        <input type="submit" name="consultaPonts" value="Consultar Pontos" />
							        <input type="submit" name="voltar" value="Voltar" />
							    </p>
							</form>


<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
?>-->
		


    <script src="lib/jquery/1.11.3/jquery.js"></script>
    <script src="lib/bootstrap/bootstrap.min.js"></script>
	<script src="lib/angular/angular.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/controllers/MainController.js"></script>
  </body>
</html>