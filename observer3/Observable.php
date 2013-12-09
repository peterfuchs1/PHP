<?php
/**
 * Class Observable
 * @author uhs374h
 *
 */
class Observable implements IObservable {
	private $actTemp = 0.0;
	private $actPressure = 0.0;
	private $minTemp;
	private $maxTemp;
	private $observers = array ();
	public function __construct($newTemp = 0.0, $newPressure = 0.0) {
		$this->actTemp = $newTemp;
		$this->actPressure = $newPressure;
		$this->minTemp = $newTemp;
		$this->maxTemp = $newTemp;
	}
	/**
	 * setter for actTemp
	 * 
	 * @param unknown $newTemp        	
	 */
	public function setActTemp($newTemp) {
		if (is_numeric ( $newTemp )) {
			$this->actTemp = $newTemp;
			$this->minTemp = ($newTemp < $this->minTemp) ? $newTemp : $this->minTemp;
			$this->maxTemp = ($newTemp > $this->maxTemp) ? $newTemp : $this->maxTemp;
		}
	}
	/**
	 * getter for actTemp
	 * 
	 * @return real
	 */
	public function getActTemp() {
		return $this->actTemp;
	}
	/**
	 * getter for minTemp
	 * 
	 * @return real
	 */
	public function getMinTemp() {
		return $this->minTemp;
	}
	/**
	 * getter for maxTemp
	 * 
	 * @return real
	 */
	public function getMaxTemp() {
		return $this->maxTemp;
	}
	/**
	 * setter for actPressure
	 * 
	 * @param
	 *        	$newPressure
	 */
	public function setActPressure($newPressure) {
		if (is_numeric ( $newPressure ))
			$this->actPressure = $newPressure;
	}
	/**
	 * getter for actPressure
	 * 
	 * @return number
	 */
	public function getActPressure() {
		return $this->actPressure;
	}
	/**
	 * addObserver
	 * 
	 * @param IObserver $o        	
	 */
	public function addObserver(IObserver $o) {
		$this->observers [spl_object_hash ( $o )] = $o;
	}
	/**
	 * remove Observer
	 * 
	 * @param IObserver $o        	
	 */
	public function removeObserver(IObserver $o) {
		unset ( $this->observers [spl_object_hash ( $o )] );
	}
	/**
	 * notify all registered observers
	 */
	public function notifyObservers() {
		foreach ( $this->observers as $obs => $key )
			$key->update ( $this->actTemp, $this->maxTemp, $this->minTemp, $this->actPressure );
	}
}
?>