<?php 
/**
 * Class Observer
 * @author uhs374h
 *
 */
class Observer implements IObserver{
	private $event;
	private $name;
	private $all;
	/**
	 * Constructor with one parameter
	 * @param $name for the observer
	 */
	public function __construct($name,$all=false){
		$this->name=$name;
		$this->all=$all;
	}
	/**
	 * This is the implementation of the IObserver
	 * @param IObservable $o
	 */
	public function  update(WeatherEvent $event){
		$this->event=$event;
		echo 'Die aktuelle Temperatur von ('.$this->name.') betr&auml;gt '.$this->event->getActTemp().'</br>';
		if($this->all){
			echo '<i>&ensp;Die Maximal-Temperatur betr&auml;gt '.$this->event->getMaxTemp().'</br>';
			echo '&ensp;Die Minimal-Temperatur betr&auml;gt '.$this->event->getMinTemp().'</br>';
			echo '&ensp;Der aktuelle Druck betr&auml;gt '.$this->event->getActPressure().'</br></i>';
		}
	} 
}
?>