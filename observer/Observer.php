<?php 
/**
 * Class Observer
 * @author uhs374h
 *
 */
class Observer implements IObserver{
	private $actTemp;
	private $name;
	private $all;
	/**
	 * Constructor with one parameter
	 * @param $name for the observer
	 */
	public function __construct($name,$all=false){
		$this->name=$name;
		$this->all=$all;
		$this->actTemp=0.0;
	}
	/**
	 * This is the implementation of the IObserver
	 * @param IObservable $o
	 */
	public function  update(Observable $o){
		$this->actTemp=$o->getActTemp();
		echo 'Die aktuelle Temperatur von ('.$this->name.') betr&auml;gt '.$this->actTemp.'</br>';
		if($this->all){
			echo '<i>&ensp;Die Maximal-Temperatur betr&auml;gt '.$o->getMaxTemp().'</br>';
			echo '&ensp;Die Minimal-Temperatur betr&auml;gt '.$o->getMinTemp().'</br>';
			echo '&ensp;Der aktuelle Druck betr&auml;gt '.$o->getActPressure().'</br></i>';
		}
	} 
}
?>