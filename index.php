<?php
require_once "Core/Autoloader.php";
require_once "Config/config.php";

// Teste de conexão
$db = new Database();
$conn = $db->getConnection();

$postModel = new Post($conn);
$controller = new PostsController($postModel);

header("Content-Type: application/json");
$controller->listPosts();
