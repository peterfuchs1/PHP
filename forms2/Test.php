<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Client
function __autoload($class_name)
{
	include $class_name . '.class.php';
} 

$html=new HtmlText("Ein kleiner Text");
$bold=new Bold($html);
$link=new Link($bold,"http://www.orf.at/");
$it=new Italic($html);
$p=new Paragraph($it);
$out=$html;
$out.= $bold;
$out.= $link;
$out.= $it;
$out.= $p;
$b=new Br($bold);
$out.= $b;
$com=new Comment($bold);
$out.= $com;
echo $out;
?>