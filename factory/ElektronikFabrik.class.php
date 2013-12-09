<?php 
 class ElektronikFabrik extends Fabrik {
	public function __construct(){
		$this->fabArt="Elektronikprodukte";
	}
	static function  erzeuge($produkt) {
		$ret=null;
		if(strcmp($produkt,"USB_Stick")==0){
			$ret= new USB_Stick(1, "USB_16_GB", 9.99);

		}
		return $ret;
	}

}
?>