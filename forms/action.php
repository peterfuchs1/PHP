<?php 
#Überprüfen, welche Fach ausgewählt wurde
if ( isset ($_POST['Fach']) ) { 
    if ($_POST['Fach'] == "SEW") { 
    	echo "Ihr Lieblingsfach ist SEW";
    }
    if ($_POST['Fach'] == "ITP") { 
    	echo "Ihr Lieblingsfach ist ITP";
    } 
}

echo "<br />";
echo "<br />";

#Überprüfung, welche Fächer wurden noch ausgewählt wurden
if($_POST['SEW'])
echo "Sie m&ouml;gen den Unterricht in ".$_POST['SEW']."<br />";
if($_POST['ITP'])
	echo "Sie m&ouml;gen den Unterricht in ".$_POST['ITP']."<br />";
if($_POST['INSY'])
	echo "Sie m&ouml;gen den Unterricht in ".$_POST['INSY']."<br />";
#Lieblingsobst:
echo "Zum Schluss noch ihr Lieblingsobst lautet: ".$_POST['Obst']."<br />";
?> 