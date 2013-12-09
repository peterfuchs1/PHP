<?php 
/**
 * @package forms2
 * @class HtmlDivContainer
 * consists of 
 * @author uhs374h
 *
 */
class HtmlDivContainer implements IDivContainer{
	/**
	 * @private
	 * id des Div-Tags
	 * @var String
	 */
	private $id;
	/**
	 * @private
	 * class des Div-Tags
	 * @var String
	 */
	/**
	 * @private
	 * container for container
	 * @var HtmlContainer
	 */
	private $container=null;
	private $class;
	/**
	 * @public
	 * 
	 * @param string $id
	 * @param string $class
	 */
	
	public function __construct($id,$class=""){
		if (!isSet($id)) die("id is a must have!");
		$this->id=$id;
		$this->container=array();
	}
	/**
	 * @public
	 * fuegt DivContainer hinzu
	 * @param DivContainer $container
	 */
	public function addContainer(DivIContainer $container){
		$this->container[]=$container;
	}
	
}
?>