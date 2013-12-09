<?php 
interface IObservable {
	 public function addObserver(IObserver $o);
	 public function removeObserver(IObserver $o);
	 public function notifyObservers();
}
?>