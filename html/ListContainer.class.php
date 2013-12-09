<?php
/**
 * DivContainer for HTML-Pages
 * @package html
 * @class DivContainer
 * 
 * @author uhs374h
 * @version 2013-11-21 first draft
 *
 */
class ListContainer extends TagContainer {
	public function __construct($tag,$attributes=array()){
		parent::__construct($tag,$attributes);		
	}
	/**
	 * @public
	 * make html-code of this DivContainer
	 * @return string
	 */
	public function __toString() {
		$html = "<$this->tag";
		foreach ($this->attributes as $key => $value){
			if($value!=="")
				$html.=" $key=\"$value\"";
		}
		$html.=">";
		// use the toString() from the superclass!
		foreach ($this->container as $c){
			if(!is_object($c)){
				$html.="<li>$c</li>";
			}
			else
				$html.=$c;
		}
		return $html."</$this->tag>";
	}
}
?>