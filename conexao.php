<?php

$usuario = 'root';
$senha = '';
$database = 'tcc';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

//if($mysqli->connect_error) {
 //   die("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
//} else {
 //   echo "Conexão estabelecida com sucesso.";
//}