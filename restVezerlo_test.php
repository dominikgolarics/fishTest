<?php
require_once('restVezerlo.php');

$frrk = new FishingRodrestKezelo();

print("Összes horgászbot teszt \n");
$_GET["view"] = "all";
$frrk->getAllFRod();
print('\n');

print("Horgászbot ID alapján teszt");
$_GET['view']="single";
$_GET['id']=1;
$frrk->getFRodById($_GET['id']);
print('\n');

print("Horgászbot nem létező ID alapján teszt");
$_GET['view']="single";
$_GET['id']=9999999;
$frrk->getFRodById($_GET['id']);
print('\n');

print("Horgászbot type alapján teszt");
$_GET['view']="tipus";
$_GET['tid']='Rakos';
$frrk->getFRodById($_GET['tid']);
print('\n');

print("Horgászbot hibás type alapján teszt");
$_GET['view']="tipus";
$_GET['id']="Unkown";
$frrk->getFRodById($_GET['tid']);
print('\n');