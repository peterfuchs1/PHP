<?php 
class Bold extends HtmlDecorator{
	private $html;
	public function __construct(HtmlElement $html){
		$this->html=$html;
	} 
	public function __toString(){
		return "<B>$this->html.</B>";
	}
}?>