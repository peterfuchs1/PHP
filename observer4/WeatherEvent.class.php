<?php
class WeatherEvent {
	private $actTemp = 0.0;
	private $actPressure = 0.0;
	private $minTemp;
	private $maxTemp;
	public function __construct($acTemp=0.0,$actPressure=0.0,$minTemp=0.0,$maxTemp=0.0){
		$this->actTemp=$acTemp;
		$this->actPressure=$actPressure;
		$this->minTemp=$minTemp;
		$this->maxTemp=$maxTemp;
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
	 * getter for actPressure
	 *
	 * @return number
	 */
	public function getActPressure() {
		return $this->actPressure;
	}
	
}
?>