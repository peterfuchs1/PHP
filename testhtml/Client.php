<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
// include my package html
$path = get_include_path() . PATH_SEPARATOR . '/var/www/html';
set_include_path($path);

//Client
function __autoload($class_name)
{
	include $class_name . '.class.php';
}

$seite=new HtmlFrame("Test","css.css");
$seite->addContent("<h1>Das ist eine &Uuml;berschrift!</h1><hr>");
$seite->addContent("<p>Das ist ein <b> fetter</b> Paragraph</p>");
$p=new TagContainer("p",array("id"=>"id1"));
$p->addContent("Ein Text im Paragraph with id1");
$div1=new TagContainer("div",array("id"=>"id1"));
$div1->addContent("erste Zeile im div id1</br>");
$div1->addContent("zweite Zeile im div id1</br>");
$liste=new ListContainer("ol");
$liste->addContent("<b>ein fettes Element</b>");
$liste->addContent("<u>ein underlined Element</u>");
$liste2=clone $liste;
$liste2->setTag("ul");
$div1->addContent("etwas sp&auml;ter noch eine dritte Zeile im div id1</br>");
$seite->addContainer($div1);
$seite->addContainer($liste);
$seite->addContainer($liste2);
$seite->addContainer($liste);
$seite->addContainer($p);
echo $seite;
?>