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

echo "<h2>ID alapján horgászbot</h2>";
$rbid=$fr->getFishingRodById(1);
if(!empty($rbid)){
    foreach($rbid as $pbot){
        echo "id: ".$pbot['fr_ID']. " - Név: ".$pbot['name']. "<br>";
    }
}
else{
    echo "Nincs találat";
}

echo "<h2>ID alapján horgászbot</h2>";
$rbtype=$fr->getFishingRodByType('Rakos');
if(!empty($rbtype)){
    foreach($rbtype as $pbot){
        echo "id: ".$pbot['fr_ID']. " - Név: ".$pbot['name']. "<br>";
    }
}
else{
    echo "Nincs találat";
}