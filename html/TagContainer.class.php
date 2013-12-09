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
class TagContainer extends Container {
	/**
	 * @protected
	 * the tag
	 * @var string
	 */
	protected  $tag;
	/**
	 * @protected
	 * attributes for the tag
	 * @var String
	 */
	protected  $attributes=array();
	public function __construct($tag,$attributes=array()){
		$this->tag=$tag;
		$this->attributes=array_merge($attributes,$this->attributes);
	}
	public function setAttributes($attributes=array()){
		if(isset($attributes))
			$this->attributes=$attributes;
	}
	public function addAttribute($key,$value){
		if(isSet($value) && $value!=="")
			$this->attributes[$key]=$value;
	}
	public function removeAttribute($key){
		if(isSet($this->attributes[$key]))
			unset($this->attributes[$key]);
	}
	public function setTag($tag){
		if(isset($tag)&&$tag!=="")
			$this->tag=$tag;
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
		$html.=parent::__toString();
		return $html."</$this->tag>";
	}
}
?>