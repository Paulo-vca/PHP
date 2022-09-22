<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="atividade2.php ">
        <label for="numero">Digite um numero:</label><br>
        <input type="number" name="numerof" ><br><br>
        <input type="submit" id="txt" name="txt" ><br><br>
      </form> 
    
</body>
</html>

<?php
  $num = $_GET["numerof"];
  echo nl2br("!{$num} = ");
  if($num > 0){
    $valor = $num;
    for($i = ($valor - 1); $i > 0; $i--){
      echo nl2br("({$valor}.{$i})");
      $valor = $valor * $i;
    }
  }else{
    $valor = 0;
  }

  echo(" = {$valor}");
?>