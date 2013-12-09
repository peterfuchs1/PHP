<?php 
/**
 * Container for HTML-Pages with css-support
 * @package html
 * @class HtmlFrame
 * @author uhs374h
 * @version 2013-11-21 first draft
 *
 */
class HtmlFrame extends Container{
	/**
	 * @private
	 * css internal or external
	 * @var String or css-file
	 */
	private $css;
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
	}
	/**
	 * @public
	 * make html-code of this Container
	 * @return string
	 */
	public function __toString(){
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
		// use the toString() from the superclass!
		$html.=parent::__toString();		
		return $html."</body></html>";
	}
}
?>