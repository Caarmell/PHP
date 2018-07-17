<?php 
class ProduktBazowy{
	protected $id, $nazwa, $cena, $opis, $zdjecie, $waluta;
	
	//konstruktor
	public  function __construct(){
		echo "Konstruktor klasy bazowej<br/>";
	}
	//destruktor
	public function __destruct(){
		echo "<br/>zniszczony bazowy produkt";
	}
	
	public function __set($jakiepole, $jakawartosc){
		if(property_exists($this, $jakiepole))
			$this->jakiepole = $jakawartosc;
		else 
			throw new Exception("Nie ma pola $jakiepole! <br/>");
	}
	
	public function __get($jakiepole){
		if(property_exists($this, $jakiepole))
			return $this->jakiepole;
		else 
			throw new Exception("Nie ma pola $jakiepole!<br/>");
	}
	
	public function __call($nazwametody, $argumenty){
		echo "Próbuje wywołać metodę $nazwametody <br/>";
	}
	
	public function __isset($nazwa){
		echo "$nazwa ma wartosc null <br/>";
	}
	
	public function __unset($nazwa){	
		echo "dzialanie unset <br/>";
	}
}
?>