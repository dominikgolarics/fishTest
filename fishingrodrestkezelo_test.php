<?php
require_once("fishingrodrestkezelo.php");

$frrk= new FishingRodrestKezelo();
echo json_encode([
    "message" => "Összes horgászbot teszt:\n",
    "data" => $frrk->getAllFRod()
]);

print("\n");
print("horgászbot lek.id\n");
echo json_encode([
    "message" => "id alapján\n",
    "data"=>$frrk->getFRodById(1)
]);
print("\n");

print("horgászbot lek.tipus\n");
echo json_encode([
    "message" => "tipus alapján :)\n",
    "data"=>$frrk->getFRodByType('Rakos')
]);
print("\n");