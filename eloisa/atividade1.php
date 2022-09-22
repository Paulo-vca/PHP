<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATIVIDADE 1</title>
</head>

<body>
  <form method="get" action="atividade1.php">
    <label for="numero">Digite um número:</label><br>
    <input type="number" name="numerof"><br><br>
    <input type="submit" id="txt" name="txt"><br><br>
  </form>

  <?php
  $val = $_GET["numerof"];
  $resultado = 0;

  if ($val > 0) {
    $resultado = "Positivo";
  } elseif ($val < 0) {
    $resultado = "Negativo";
  } else {
    $resultado = "Igual a Zero";
  }

  echo "Número: $resultado";
  ?>

</body>

</html>