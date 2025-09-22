<?php
header('Content-Type: application/json; charset=utf-8');

$tinhtrang = "baotri"; 
$url = "https://tooltft.pro";

echo json_encode([
    "tinhtrang" => $tinhtrang,
    "url" => $url
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
