<?php 
class SpezialFabrik extends Fabrik{
	public function __construct(){
		$this->fabArt="Alle Produkte";
	}
	static function  erzeuge($produkt) {
		$ret=new $produkt();
		return $ret;
	}
	
}
?>