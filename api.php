<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$apiKey = "600647ee83ec72597cd7d20bc3d4f3f4"; // 🔑 Replace this with your real key from https://gnews.io/
$query = isset($_GET['q']) ? urlencode($_GET['q']) : 'latest';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$url = "https://gnews.io/api/v4/search?q={$query}&token={$apiKey}&lang=en&max=12&page={$page}";
$response = file_get_contents($url);
echo $response;
?>
