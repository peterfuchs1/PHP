<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Client
function __autoload($class_name)
{
	include $class_name . '.class.php';
}

$seite=new HtmlForm("action.php");
$text1=new HtmlFormText("TF1","Textfeld1","start1");
$text2=new HtmlFormText("TF2","Textfeld2","start2");
$cb1=new HtmlFormCheckBox("SEW","Ich mag folgenden Unterricht:","SEW",true);
$cb2=new HtmlFormCheckBox("ITP","","ITP");
$cb3=new HtmlFormCheckBox("INSY","","INSY");
$rb1=new HtmlFormRadioButton("Fach","Mein liebstes Fach","SEW",true);
$rb2=new HtmlFormRadioButton("Fach","","ITP");
$ta=new HtmlFormTextArea("Ta","Eingabem&ouml;glichkeit");
$obst=array("Apfel"=>"Apfel",
		"Birne"=>"Birne",
		"Banane"=>"Banane",
		"Orange"=>"Orange",
		"Marille"=>"Marille",
		"Zwetschke"=>"Zwetschke",
		"Pfirsich"=>"Pfirsich");
$select=new HtmlFormSelect("Obst","Lieblingsobst",$obst,2);
$seite->addInputForm($text1);
$seite->addInputForm($text2);
$seite->addInputForm($cb1);
$seite->addInputForm($cb2);
$seite->addInputForm($cb3);
$seite->addInputForm($rb1);
$seite->addInputForm($rb2);
$seite->addInputForm($ta);
$seite->addInputForm($select);
echo $seite->display();
?>