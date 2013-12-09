<?php 
abstract class HtmlDecorator extends HtmlElement{
	public function __toString(){
		return "deco";
	}
}?>