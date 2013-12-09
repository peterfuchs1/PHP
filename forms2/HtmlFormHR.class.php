<?php
/**
 * @package forms2
 * @class HtmlFormsHR
 * horizontal line
 * @author uhs374h
 * @version
 * 2013-11-20: first draft
 *
 */
class HtmlFormHR extends HtmlFormInput {

	/**
	 * @public
	 * Konstruktor
	 * 
	 * @param $name Name
	 *        	des Feldes
	 * @param $heading Label        	
	 *         	
	 *
	 */
	public function __construct() {
		// Initialization of member vars
	
		$this->name = "hr"; // geerbt aus der Basisklasse
		$this->heading = ""; // geerbt aus der Basisklasse
	}
	/**
	 * @public
	 * Erstellt den String zur Anzeige der horizontal line
	 * 
	 * @return String
	 */
	public function display() {
		return "<HR>";
	}
}

?>