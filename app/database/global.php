<?php

$host = "interno.mentorasolucoes.com.br:8084";
$user = "root";
$pass = "1234";
$dbname = "dados";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
