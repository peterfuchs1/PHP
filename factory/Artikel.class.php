<?php 
abstract class Artikel {

	private  $nummer;
	protected  $kategorie;
	private $bezeichnung;

	private  $preis;

	private  $gewicht;
	private  $mengenEinheit;
	private $menge;
	public function __construct($nummer,$bezeichnung,$preis,
			$menge=1,$mengenEinheit=null,$gewicht=1){
		$this->nummer=$nummer;
		$this->kategorie="";
		$this->bezeichnung=$bezeichnung;
		$this->preis=$preis;
		$this->mengenEinheit=$mengenEinheit;
		$this->menge=$menge;
		$this->gewicht=$gewicht;
	}
	/**
	 * @return the mengenEinheit
	 */
	public function  getMengenEinheit() {
		return $this->mengenEinheit;
	}
	
	/**
	 * @param mengenEinheit the mengenEinheit to set
	 */
	public function  setMengenEinheit(Einheiten $mengenEinheit) {
		$this->mengenEinheit = $mengenEinheit;
	}
	
	/**
	 * @return the nummer
	 */
	public function  getNummer() {
		return $this->nummer;
	}
	
	/**
	 * @param nummer the nummer to set
	 */
	public function  setNummer($nummer) {
		$this->nummer = $nummer;
	}
	
	/**
	 * @return the bezeichnung
	 */
	public function  getBezeichnung() {
		return $this->bezeichnung;
	}
	
	/**
	 * @param bezeichnung the bezeichnung to set
	 */
	public function  setBezeichnung($bezeichnung) {
		$this->bezeichnung = $bezeichnung;
	}
	
	/**
	 * @return the preis
	 */
	public function  getPreis() {
		return $this->preis;
	}
	
	/**
	 * @param preis the preis to set
	 */
	public function  setPreis($preis) {
		$this->preis = $preis;
	}
	
	/**
	 * @return the gewicht
	 */
	public function getGewicht() {
		return $this->gewicht;
	}
	
	/**
	 * @param gewicht the gewicht to set
	 */
	public function  setGewicht($gewicht) {
		$this->gewicht = $gewicht;
	}
	
	/**
	 * @return the menge
	 */
	public function  getMenge() {
		return $this->menge;
	}
	
	/**
	 * @param menge the menge to set
	 */
	public function  setMenge($menge) {
		$this->menge = $menge;
	}
	public function  getKategorie() {
		return $this->kategorie;
	}
	
	
}

?>