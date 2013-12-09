<?php 
abstract class Fabrik {

	private $bezahlt;

	private $verpackt;

	private $verschickt;
	protected $fabArt;
	private $einkaufsWagen;

	/**
	 * Konstruktor
	 */
	public function __construct() {
		$this->einkaufsWagen=array();
		$this->bezahlt=false;
		$this->verpackt=false;
		$this->verschickt=false;
		$this->fabArt="";
	}
	/**
	 * kein Produkt erzeugt
	 * @param produkt
	 * @return
	 */
	static function erzeuge($produkt) {return null;}
	/**
	 * Produkt in den Einkaufswagen
	 * @param produkt
	 */
	public function  add(Artikel $produkt){
		$this->einkaufsWagen[]=$produkt;
	}
	/**
	 * Produkte bezahlt
	 */
	public function  bezahlen() {
		$this->bezahlt=true;
	}
	/**
	 * Produkte verpackt
	 */
	public function  verpacken() {
		$this->verpackt=true;
	}
	/**
	 * Produkte verschickt
	 */
	public function  verschicken() {
		$this->verschickt=true;
	}

	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	*/

	public function  __toString() {

		$size=sizeof($this->einkaufsWagen);
		$out="Der Einkaufswagen enthaelt ".$this->fabArt.": ".$size."<br/>";
		if($size>0){
			
			$kosten=0.0;
			foreach ($this->einkaufsWagen as $artikel){
				$kosten+=$artikel->getPreis();
				$out.=$artikel->getKategorie().": ".$artikel->getNummer();
				$out.=", ".$artikel->getMenge().$artikel->getMengenEinheit();
				$out.=" ".$artikel->getBezeichnung();
				$out.=", Preis: ".$artikel->getPreis()."<br/>";
			}
			$out.="Gesamtkosten: ".$kosten."<br/>";
			$out.="Die Produkte wurden ";
			if(!$this->bezahlt)
				$out.="noch nicht ";
			$out.="bezahlt.<br/>";
			$out.="Die Produkte wurden ";
			if(!$this->verpackt)
				$out.="noch nicht ";
			$out.="verpackt.<br/>";
			$out.="Die Produkte wurden ";
			if(!$this->verschickt)
				$out.="noch nicht ";
			$out.="verschickt.<br/><br/>";
		}
		return $out;
	}

}
?>