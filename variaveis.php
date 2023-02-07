<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
<?php
  //string
  $nome = 'Jorge Sant Ana';
  //int
  $idade = 29;
  //float
  $peso = 82.5;
  //boolean
  $fuma = false; //(true=1) or 
 // (false=vazio)
?>
<h1>Ficha cadastral</h1>
<br>
<p>Nome: <?= $nome ?></p>
<p>idade: <?= $idade ?></p>
<p>peso: <?= $peso ?></p>
<p>fumante: <?= $fuma ?></p>
</body>
</html>