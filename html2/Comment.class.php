<?php
/**
 * @package forms2
 * @class Comment
 * Decorator for <!-- xxx -->
 * @author uhs374h
 * 2013-11-21
 */ 
class Comment extends HtmlDecorator{
	private $html;
	public function __construct(HtmlElement $html){
		$this->html=$html;
	} 
	public function __toString(){
		return "<!--$this->html-->";
	}
}?>