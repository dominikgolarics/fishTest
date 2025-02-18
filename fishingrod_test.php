<?php
require_once("fishingrod.php");

$fr = new FishingRod();
echo "<h2>Összes horgászbot</h2>";
$ar=$fr->getAllFishingRods();
if(!empty($ar)){
    foreach($ar as $pbot){
        echo "id: ".$pbot['fr_ID']. " - Név: ".$pbot['name']. "<br>";
    }
}
else{
    echo "Nincs találat";
}
