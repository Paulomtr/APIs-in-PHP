<?php
require_once "Core/Autoloader.php";

// Teste de conexão
$db = new Database();
$conn = $db->getConnection();
if($conn) echo "Conexão com banco estabelecida com sucesso!";
