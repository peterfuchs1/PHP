<?php
/**
 * 
 * @package forms2
 * @abstract
 * @class HtmlFormInput
 * Abstrakte Basis-Klasse für alle Inputelemente
 * @author uhs374h
 *
 */
abstract class HtmlFormInput {
	/**
	 * @protected 
	 * Name der Komponente 
	 * 
	 */
	protected  $name;
	/**
	 * @protected
	 * Label
	 */
	protected  $heading; // Label
	/**
	 * @public
	 * Konstruktur
	 * sollte nie verwendet werden
	 * 
	 */
	public  function __construct(){
		die ( "Class HtmlFormInput intended only " . "to be subclassed" );
	}
	/**
	 * 
	 * @abstract
	 * Anzeige: Sollte nie verwendet werden
	 */
	public abstract  function display();
	/**
	 * @public
	 * getter
	 * 
	 * @return Name der Variablen
	 */
	public function getName() {
		return $this->name;
	}
	/**
	 * @public
	 * getter
	 * 
	 * @return Label
	 */
	public  function getHeading() {
		return $this->heading;
	}
	/**
	 * @public
	 * Setter
	 * 
	 * @param  heading
	 *        	
	 */
	public function setHeading($heading) {
		$this->heading = $heading;
	}
	/**
	 * @public
	 * Setter
	 * 
	 * @param Label
	 *        	
	 */
	public function setName($name) {
		$this->name = $name;
	}
}

?>