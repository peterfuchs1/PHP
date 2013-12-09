<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Client
function __autoload($class_name)
{
	include $class_name . '.class.php';
}

$fab=new SpezialFabrik();
$usb=SpezialFabrik::erzeuge("USB_Stick");
$spinat=SpezialFabrik::erzeuge("TKSpinat");
$maroni=SpezialFabrik::erzeuge("Maronireis");
$maroni2=SpezialFabrik::erzeuge("Maronireis");
$fab->add($usb);
$fab->add($spinat);
$fab->add($maroni);
$fab->add($maroni2);
echo $fab;
$fab->bezahlen();
$fab->verpacken();
echo $fab;
$fab->verschicken();
echo $fab;
?>