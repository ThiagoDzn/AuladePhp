<?php
use App\SystemServices\MonologFactory;

include_once __DIR__ .  "/../vendor/autoload.php";


$logger = MonologFactory::getInstance();

$logger->debug("Arquivo main.php rodando...");
$logger->info("Apenas uma informação");
$logger->error("se o app dar erro aparece isso");
?>