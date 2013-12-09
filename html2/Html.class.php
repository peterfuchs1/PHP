<?php 
/**
 * Container for HTML-Pages with css-support
 * @package html
 * @class Html
 * @implements IContainer
 * @author uhs374h
 * @version 2013-11-21 first draft
 *
 */
class Html implements IContainer{
	/**
	 * @private
	 * css internal or external
	 * @var String or css-file
	 */
	private $css;
	/**
	 * @private
	 * array of container
	 * @var IContainer
	 */
	private $container;
	/**
	 * @private
	 * title of the page
	 * @var String
	 */
	private $title;
	/**
	 * @public
	 * Konstruktor with two parameter
	 * @param string $title of the page
	 * @param string $css file or css-code
	 */
	public function __construct($title="",$css=""){
		$this->title=$title;
		$this->css=$css;
		$this->container=array();
	}
	/**
	 * @public
	 * add Content for the page
	 * @inherit
	 * @param String $input
	 */
	public function addContent($input){
		if(isSet($input))
			array_push ( $this->container, $input );
	}
	/**
	 * @public
	 * add another Container
	 * @inherit
	 * @param IContainer $input
	 */
	public function addContainer(IContainer $input){
		if (! isSet ( $input) ) {
			die ( "Argument to Html::addContainer " . 
					"must be instance of IContainer." . 
					" Given argument is of class " . get_class ( $input) );
		} else {		
			array_push ( $this->container, $input );
		}
	}
	/**
	 * @public
	 * make html-code of this Container
	 * @return string
	 */
	public function display(){
		$html="<html><head><title>$this->title</title>";
		$css="";
		if($this->css!=="")
			if(strpos($this->css,'.css'!==false)){
				// internal style sheet
				$css="<style type=\"text/css\">".$this->css."</style>";
			}
			else{
				//external style sheet
				$css="<link rel=\"stylesheet\" type=\"text/css\" href=\"$this->css\">";
			}
		$html.=$css."</head><body>";
		foreach ($this->container as $c){
			if(is_object($c))
				$html.=$c->display();
			else 
				$html.=$c;
		}
		
		return $html."</body></html>";
	}
}
?>