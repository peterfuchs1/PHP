<?php 
interface IObserver{
	public function update(WeatherEvent $event);
}
?>