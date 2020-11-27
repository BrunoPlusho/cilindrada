<?php
$diametrodelcilindro = $_GET["diametrodelcilindro"];
$carrera = $_GET["carrera"];
$numerodecilindros = $_GET["numerodecilindros"];
$pi = pi();
$dividido = 4000;

$resultado = round(($diametrodelcilindro * $diametrodelcilindro * $pi * $carrera * $numerodecilindros) / $dividido);

echo "Tu motor es de " . $resultado . "cc";
