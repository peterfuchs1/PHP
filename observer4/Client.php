<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Client
function __autoload($class_name)
{
	include $class_name . '.class.php';
}

/**
 * Test class Observer-Pattern
 * Each Observer receives a WeatherEvent
 * with 
 * - actTemp
 * - actPressure
 * - mintemp
 * - maxTemp
 * All interfaces and classes end with .class.php
 * 
 * The Observable use assoziative arrays.
 * @author Walter Rafeiner-Magor
 *
 */
class Client
{
	public function __construct()
	{
		echo "<p>Create three new concrete observers</p>";
		$ob1 = new Observer('Observer1');
		$ob2 = new Observer('Observer2',true);
		$ob3 = new Observer('Observer3');
		echo "<p>Create a new concrete observable</p>";
		$subject = new Observable(-2.0,1024.0);
		$subject->addObserver($ob1);
		$subject->addObserver($ob2);
		$subject->addObserver($ob3);
		$subject->setActTemp(4.2);
		$subject->notifyObservers();
		echo "<p>only for 1 and 3</p>";
		$subject->removeObserver($ob2);
		$subject->setActTemp(-2.2);
		$subject->setActPressure(1090.0);
		$subject->notifyObservers();
		echo "<p>reattach 2 and remove 1</p>";
		$subject->addObserver($ob2);
		$subject->removeObserver($ob1);
		$subject->setActTemp(0.5);
		$subject->setActPressure(998.0);
		$subject->notifyObservers();
				
	}
}

$worker=new Client();


?>