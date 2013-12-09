<?php 
class TKSpinat extends TiefkuehlProdukt {
	public function __construct($nummer=443, $bezeichnung="Tiefkuehl Spinat", 
			$preis=1.49,$menge=250, $mengenEinheit=Einheiten::G) {
		parent::__construct($nummer,$bezeichnung,$preis,$menge,$mengenEinheit);
	}
}?>