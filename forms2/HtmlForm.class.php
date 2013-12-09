<?php
/**
 * @package forms2
 * @class HtmlForm
 * @author uhs374h
 * @version
 * Erweitert und verbessert von
 * Steve Suehring, Tim Converse, and Joyce Park
 * PHP6 and MySQL
 */
class HtmlForm {
	private $actionTarget; // Verarbeitung
	private $inputForms; // Array von HtmlFormInput private $hiddenVariables; # assoziatives Array (Name, Wert) private $submitString; # String für den submitbutton
	/**
	 * Konstruktor
	 *
	 * @param $action_target Wer
	 *        	verarbeitet das Ergebnis
	 * @param $submitString Was
	 *        	soll im Submit-Button angezeigt werden
	 *        	
	 *        	
	 */
	public function __construct($action_target, $submitString = "submit") {
		$this->actionTarget = $action_target;
		$this->inputForms = array ();
		$this->hiddenVariables = array ();
		$this->submitString = $submitString;
	}
	/**
	 * Darstellung des Formulars inklusive Formularfelder
	 *
	 * @return String Formular als String
	 *        
	 */
	public function display() {
		$return_string = "";
		$return_string .= "<FORM METHOD=\"POST\" " . "ACTION=\"$this->actionTarget\">\n";
		$return_string .= $this->inputFormsString ();
		$return_string .= $this->hiddenVariablesString ();
		$return_string .= "<BR>\n";
		$return_string .= $this->submitButtonString ();
		$return_string .= "</FORM>";
		return ($return_string);
	}
	/**
	 * Fügt ein Inputelement dem Formular hinzu
	 *
	 * @param $input_form (Objekt
	 *        	der Klasse HtmlFormInput)
	 *        	
	 *        	
	 */
	public function addInputForm($input_form) {
		if (! isSet ( $input_form ) || ! is_object ( $input_form ) || ! is_subclass_of ( $input_form, 'HtmlFormInput' )) {
			die ( "Argument to HtmlForm::addInputForm " . "must be instance of HtmlFormInput." . " Given argument is of class " . get_class ( $input_form ) );
		} else {
			
			array_push ( $this->inputForms, $input_form );
		}
	}
	/**
	 * Fügt eine verstekchte Variable als assoziatives Array hinzu
	 *
	 * @param $name name        	
	 * @param $value Wert        	
	 *
	 *
	 */
	public function addHiddenVariable($name, $value) {
		if (! isSet ( $value )) {
			die ( "HtmlForm::addHiddenVariable requires " . "two arguments (name and value)" );
		} else {
			$this->hiddenVariables [$name] = $value;
		}
	}
	/**
	 * Erzeugt den Ausgabestring für die Inputelemente
	 *
	 * @return String
	 *
	 */
	public function inputFormsString() {
		$return_string = "";
		$form_array = $this->inputForms;
		
		foreach ( $form_array as $input_form ) {
			$head = $input_form->getHeading ();
			if ($head !== "") { // Heading available?
				$return_string .= "<B>$head</B>";
				
				if ($this->headingElementBreak ())
					$return_string .= "</BR>";
			}
			$return_string .= $input_form->display ();
			$return_string .= "</BR>\n";
		}
		return ($return_string);
	}
	/**
	 * Erzeugt den String für die versteckten Variablen
	 *
	 * @return String
	 *
	 */
	public function hiddenVariablesString() {
		$return_string = "";
		while ( $hidden_var = each ( $this->hiddenVariables ) ) {
			$var_name = $hidden_var ['key'];
			$var_value = $hidden_var ['value'];
			$return_string .= "<INPUT TYPE=HIDDEN " . "NAME=$var_name " . "VALUE=$var_value >";
			$return_string .= "\n";
		}
		return ($return_string);
	}
	/**
	 *
	 *
	 *
	 *
	 * Fügt Break nach Label ein
	 *
	 * @return boolean
	 *
	 */
	public function headingElementBreak() {
		// falls nicht gewünscht
		// Rückgabe FALSE!
		return (TRUE);
	}
	/**
	 * Erzeugt den String für den Submit-Button
	 *
	 * @return String
	 *
	 */
	public function submitButtonString() {
		$return_string = "<INPUT TYPE=Submit " . "Name= \"submit\" " . " VALUE=\"$this->submitString\" >\n";
		return ($return_string);
	}
}
?>