<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Client
function __autoload($class_name)
{
	include $class_name . '.class.php';
}

$seite=new Html("Test","css.css");
$seite->addContent("<h1>Das ist eine &Uuml;berschrift!</h1><hr>");
$seite->addContent("<p>Das ist ein <b> fetter</b> Paragraph</p>");
$div1=new DivContainer("id1");
$div1->addContent("erste Zeile</br>");
$div1->addContent("zweite Zeile</br>");
$seite->addContainer($div1);
echo $seite->display();
?>