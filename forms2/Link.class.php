<?php 
class Link extends HtmlDecorator{
	private $html;
	private $link;
	public function __construct(HtmlElement $html,$link){
		$this->html=$html;
		$this->link=$link;
	} 
	public function __toString(){
		return "<a href=\"".$this->link."\">".$this->html."</a>";
	}
}?>