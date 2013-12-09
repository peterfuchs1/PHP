<?php 
abstract class ComputerProdukt extends Artikel {
	public function __construct($nummer,$bezeichnung,$preis,$menge,$mengenEinheit){
		parent::__construct($nummer,$bezeichnung,$preis,$menge,$mengenEinheit);
		$this->kategorie="Computerware";
	}

}

?>