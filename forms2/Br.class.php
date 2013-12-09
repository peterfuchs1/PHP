<?php
/**
 * @package forms2
 * @class Br
 * Decorator for </br>
 * @author uhs374h
 * 2013-11-21
 */ 
class Br extends HtmlDecorator{
	private $html;
	public function __construct(HtmlElement $html){
		$this->html=$html;
	} 
	public function __toString(){
		return "$this->html</br>";
	}
}?>