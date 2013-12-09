<?php
/**
 * Abstrakte Basis-Klasse für alle Inputelemente
 * @author uhs374h
 *
 */
abstract class HtmlFormInput {
	protected $name; // Name der VAriable
	protected $heading; // Label
	/**
	 * Sollte nie verwendet werden
	 * Konstruktur
	 */
	function __construct() {
		die ( "Class HtmlFormInput intended only " . "to be subclassed" );
	}
	/**
	 * Anzeige: Sollte nie verwendet werden
	 */
	function display() {
		die ( "Subclass of HtmlFormInput missing " . "definition of display()" );
	}
	/**
	 * getter
	 * 
	 * @return Name der Variablen
	 */
	function getName() {
		return $this->name;
	}
	/**
	 * getter
	 * 
	 * @return Label
	 */
	function getHeading() {
		return $this->heading;
	}
	/**
	 * Setter
	 * 
	 * @param
	 *        	$heading
	 *        	
	 */
	function setHeading($heading) {
		$this->heading = $heading;
	}
	/**
	 * Setter
	 * 
	 * @param
	 *        	$name
	 *        	
	 */
	function setName($name) {
		$this->name = $name;
	}
}

?>