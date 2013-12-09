<?php 
abstract class TiefkuehlProdukt extends Artikel {
	public function __construct($nummer,$bezeichnung,$preis,$menge,$mengenEinheit){
		parent::__construct($nummer,$bezeichnung,$preis,$menge,
				$mengenEinheit);
		$this->kategorie="Tiefkuehlware";
	}

}
?>