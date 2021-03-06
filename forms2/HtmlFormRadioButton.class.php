<?php 
/**
 * Klasse zur Darstellung von Radiobuttons
 *
 * @author Walter Rafeiner-Magor
 * @version 2010-04-26
 *
 */
class HtmlFormRadioButton extends HtmlFormInput {
	protected $initial_value;
	protected $check;
	/**
	 * Konstruktor
	 * @param $name 			Name des Feldes
	 * @param $heading 			Label
	 * @param $initial_value 	Anfangswert
	 * @param $check			vorselektieren
	 *
	 */
	public function __construct ($name, $heading, $initial_value="", $check="") {
		// Initialization of member vars
		if (!isSet($name) || !isSet($heading)) {
			die("HtmlFormText constructor needs " . "at least two arguments (name, heading)");
		}
		$this->name = $name; 			# geerbt aus der Basisklasse
		$this->heading= $heading; 		# geerbt aus der Basisklasse
		$this->initial_value = $initial_value;
		if($check===true)
			$this->check = "checked";
	}
	/**
	 * Erstellt den String zur Anzeige eines Radiobottuns
	 * @return String
	 */
	public function display () {
		$return_string = "";
		$return_string .= "<INPUT TYPE=RADIO ";
		$return_string .= "NAME=\"$this->name\" ";
		$return_string .= "VALUE=\"$this->initial_value\" ";
		$return_string .= "$this->check";
		$return_string .= " >";
		$return_string .= "$this->initial_value \n";
		$return_string .= "</INPUT>";
		return($return_string);
	}
}

?>