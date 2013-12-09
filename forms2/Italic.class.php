<?php 
class Italic extends HtmlDecorator{
	private $html;
	public function __construct(HtmlElement $html){
		$this->html=$html;
	} 
	public function __toString(){
		return "<I>$this->html</I>";
	}
}?>