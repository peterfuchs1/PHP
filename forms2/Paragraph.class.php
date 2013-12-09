<?php
/**
 * @package forms2
 * @class Paragraph
 * Decorator for <p>
 * @author uhs374h
 * 2013-11-21
 */ 
class Paragraph extends HtmlDecorator{
	private $html;
	public function __construct(HtmlElement $html){
		$this->html=$html;
	} 
	public function __toString(){
		return "<p>".$this->html."</p>";
	}
}?>