<?php
/**
 * Klasse für ein Auswahlmenue
 * @author uhs374h
 *
 */
class HtmlFormSelect extends HtmlFormInput {
	protected $_valueArray = array ();
	protected $_selectedValue;
	/**
	 * Konstruktor
	 * 
	 * @param $name Name
	 *        	des Feldes
	 * @param $heading Label        	
	 * @param $value_array Wertearray        	
	 * @param $selected_value vorselektierter
	 *        	Wert
	 *        	
	 */
	public function __construct($name, $heading, $value_array, $selected_value = NULL) {
		if (! isSet ( $value_array )) {
			die ( "HtmlFormSelect needs a minimum of two " . "arguments: a name, and value array" );
		} elseif (! is_array ( $value_array )) {
			die ( "Third argument to HtmlFormSelect()" . 
					"should be array where keys are values " . 
					"submitted, and values are display values" );
		} else {
			// actual initialization
			$this->name = $name;
			$this->heading = $heading;
			$this->_valueArray = $value_array;
			$this->_selected_value = $selected_value;
		}
	}
	/**
	 * Erzeugt den String zur Darstellung des Auswahlmenues
	 * 
	 * @return String
	 */
	public function display() {
		$return_string = "";
		$return_string .= "<SELECT NAME=\"$this->name\">";
		while ( $var_entry = each ( $this->_valueArray ) ) {
			$submit_value = $var_entry ['key'];
			$display_value = $var_entry ['value'];
			if ($submit_value == $this->_selected_value) {
				$return_string .= "<OPTION VALUE=${submit_value} SELECTED >";
			} else {
				$return_string .= "<OPTION VALUE=${submit_value}>";
			}
			$return_string .= $display_value;
		}
		$return_string .= "</SELECT>";
		return ($return_string);
	}
}

?>