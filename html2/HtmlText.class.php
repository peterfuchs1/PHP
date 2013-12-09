<?php
/**
 * @package forms2
 * @class HtmlText
 * Einfacher Text
 * @author uhs374h
 * @version
 * 2013-11-20 first draft
 */ 
class HtmlText extends HtmlElement{
	public function __construct($text){
		$this->text=$text;
	}
	public function __toString(){
		return "".$this->text;
	}
}?>