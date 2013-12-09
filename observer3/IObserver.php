<?php 
interface IObserver{
	public function update($actTemp,$maxTemp,$minTemp,$actPressure);
}
?>