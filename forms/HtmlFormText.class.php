<?php
/**
 * Klasse für ein Textfeld
 *
 */
class HtmlFormText extends HtmlFormInput {
	protected $initial_value;
	/**
	 * Konstruktor
	 * 
	 * @param $name Name
	 *        	des Feldes
	 * @param $heading Label        	
	 * @param $initial_value Anfangswert        	
	 *
	 */
	public function __construct($name, $heading, $initial_value = "") {
		// Initialization of member vars
		if (! isSet ( $name ) || ! isSet ( $heading )) {
			die ( "HtmlFormText constructor needs " . "at least two arguments (name, heading)" );
		}
		$this->name = $name; // geerbt aus der Basisklasse
		$this->heading = $heading; // geerbt aus der Basisklasse
		$this->initial_value = $initial_value;
	}
	/**
	 * Erstellt den String zur Anzeige eines Textfeldes
	 * 
	 * @return String
	 */
	public function display() {
		$return_string = "";
		$return_string .= "<INPUT TYPE=TEXT ";
		$return_string .= "NAME=\"$this->name\" ";
		$return_string .= "VALUE=\"$this->initial_value\" ";
		$return_string .= " >";
		return ($return_string);
	}
}

?>