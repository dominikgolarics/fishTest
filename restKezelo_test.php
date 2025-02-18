<?php
require_once("restKezelo.php");

$rk = new RestKezelo();

echo "200-as teszt - OK-ra <br>";
echo $rk->gethttpStatusUzenet(200)."<br>";
echo "400-as teszt - OK-ra <br>";
echo $rk->gethttpStatusUzenet(200)."<br>";
echo "404-as teszt - Not Found-ra <br>";
echo $rk->gethttpStatusUzenet(200)."<br>";
echo "500-as teszt - Internal Server-re <br>";
echo $rk->gethttpStatusUzenet(200)."<br>";
echo "Ismeretlen<br>";
echo $rk->gethttpStatusUzenet(999)."<br>";