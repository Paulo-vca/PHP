<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="get" action="atividade3.php ">
    <label for="nota1">Digite a primeira nota:</label><br>
    <input type="number" name="numero1"><br>
    <label for="nota1">Digite a segunda nota:</label><br>
    <input type="number" name="numero2"><br>
    <label for="nota1">Digite a terceira nota:</label><br>
    <input type="number" name="numero3"><br><br>
    <input type="submit" id="txt" name="txt"><br><br>
  </form>

</body>

</html>

<?php

$notas =  $_GET[["numero1","numero2","numero3"]];
$smTotal = 0;

for ($i = 0; $i < count($notas); $i++) {
  $smTotal += $notas[$i];
}

$resultado = $smTotal / count($notas);

if ($resultado >= 6) {
  echo "Aprovado, média final {$resultado}";
} else {
  echo "Reprovado, média final {$resultado}";
}

?>