<?php
/**
 * Container for HTML-Pages
 * @package html
 * 
 * @abstract
 * 
 * @author uhs374h
 * @version 2013-11-21 first draft
 *
 */
abstract class Container implements Displayable {
	/**
	 * @protected
	 * array of container
	 * @var Container
	 */
	protected  $container=array();
	/**
	 * @public
	 * add another Container
	 * @param Container $input
	 */
	public function addContainer(Container $input) {
		if (! isSet ( $input )) {
			die ( "Argument to Html::addContainer " . "must be instance of Container." . " Given argument is of class " . get_class ( $input ) );
		} else {
			array_push ( $this->container, $input );
		}
	}
	/**
	 * @public
	 * add Content for the page
	 * @param String $input
	 */
	public function addContent($input){
		if(isSet($input) && $input!=="")
			array_push ( $this->container, $input );
	}
	/**
	 * @public
	 * make html-code of this Container
	 * @return string
	 */
	public function __toString(){
		$html="";
		foreach ($this->container as $c){
				$html.=$c;
		}
		return $html;
	}
}
?>