<?php 
#�berpr�fen, welche Fach ausgew�hlt wurde
if ( isset ($_POST['Fach']) ) {  
    	echo "Ihr Lieblingsfach ist ".$_POST['Fach'];
}

echo "<br />";
echo "<br />";

#�berpr�fung, welche F�cher wurden noch ausgew�hlt wurden
if($_POST['SEW'])
echo "Sie m&ouml;gen den Unterricht in ".$_POST['SEW']."<br />";
if($_POST['ITP'])
	echo "Sie m&ouml;gen den Unterricht in ".$_POST['ITP']."<br />";
if($_POST['INSY'])
	echo "Sie m&ouml;gen den Unterricht in ".$_POST['INSY']."<br />";
#Lieblingsobst:
echo "Zum Schluss noch ihr Lieblingsobst lautet: ".$_POST['Obst']."<br />";
?> 