<?php 
class USB_Stick extends ComputerProdukt {

	public function __construct($nummer=1, $bezeichnung="USB_16_GB", $preis=9.99,$menge=1,$mengenEinheit=Einheiten::STK) {
		parent::__construct($nummer, $bezeichnung,$preis,$menge,$mengenEinheit);
	}

}?>