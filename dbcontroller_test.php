<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require_once("dbcontroller.php");

$db = new DBController();
if($db->connectDB()){
    echo "Az adatbázis kapcsolat sikeres <br>";
}
else{
    echo "Az adatbázis kapcsolat sikertelen <br>";
}

$query="SELECT * FROM fishingrod";
$eredmeny =$db->executeSelectQuery($query);
if($eredmeny !== "hiba"){
    echo "Lekérdezés sikeres <br>";
    echo "<pre>";
    print_r($eredmeny);
    echo "</pre>";
}
else{
    echo "Lekérdezés sikertelen <br>";

}
$db->closeDB();
echo "Lezárva";