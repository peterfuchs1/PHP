<?php 
 class Maronireis extends TiefkuehlProdukt {

	public function __construct($nummer=123, $bezeichnung="Maronireis", 
			$preis=0.99,$menge=250, $mengenEinheit=Einheiten::G) {
		parent::__construct($nummer,$bezeichnung,$preis,$menge,$mengenEinheit);
	}

}?>