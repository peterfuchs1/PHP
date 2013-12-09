<?php 
abstract class HtmlElement{
	/**
	 * @protected
	 * der Text
	 * @var String
	 */
	protected $text="";
	public function __toString(){
		return "invalid";
	}
	
} ?>