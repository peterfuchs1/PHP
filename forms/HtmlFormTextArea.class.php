<?php 
/**
 * Klasse zur Darstellung einer Textarea
 * @author uhs374h
 *
 */
class HtmlFormTextArea extends HtmlFormInput {
	protected $initial_value;  #Anfangswert
	protected $rows;                 # Anzahl der Zeiles
	protected $cols;                 # Anzahl der Spalten protected $wrapType;       # Wie soll umgebrochen werden

	/**
	 * Konstruktor
	 * @param $name            Name des Feldes
	 * @param $heading         Label
	 * @param $initial_value   Anfangswert
	 * @param $rows            Anzahl der Zeilen
	 * @param $cols            Anzahl der Spalten
	 * @param $wrapType        Umbruch
	 *
	 */
	public function  __construct ($name,
	$heading,
	//optionale Parameter:
	$initial_value="",
	$rows=1, $cols=60,
	$wrapType="VIRTUAL")
	{
		// Initialization of member vars
		if (!isSet($name)) {
			die("HtmlFormTextArea constructor needs " .
					"at least two arguments (name, heading)");
		}
		$this->name = $name;           # geerbt aus der Basisklasse
		$this->heading = $heading;     # geerbt aus der Basisklasse
		$this->initial_value = $initial_value;
		$this->rows = $rows;
		$this->cols = $cols;
		$this->wrapType = $wrapType;
	}
	/**
	 * Anzeige der Textarea als String
	 * @return String
	 */
	public function display ()
	{
		$return_string = "";
		$return_string .= "<TEXTAREA ";
		$return_string .= "NAME=\"$this->name\" ";
		$return_string .= "ROWS=$this->rows ";
		$return_string .= "COLS=$this->cols ";
		$return_string .= "WRAP=$this->wrapType ";
		$return_string .= $this->additionalAttributes();
		$return_string .= ">";
		$return_string .= $this->initial_value;
		$return_string .= "</TEXTAREA>";
		return($return_string);
	}
	/**
	 * Falls weitere Atribute notwendig sind
	 * @return String
	 */
	public function additionalAttributes () {
		// sollte die Methode
		// überschrieben werden return("");
	}
}

?>