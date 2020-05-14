<html>

<head>
    <title>Listar Carro</title>
</head>

<body>

<table>
  <tr>
    <th>ID</th>
    <th>Modelo</th>
    <th>Placa</th>
  </tr>


<?php
    include_once "carroDao.php";
    $carroDao = new CarroDao();
    $carroDao->listarCarros();

?>




</table> 



</body>


</html>