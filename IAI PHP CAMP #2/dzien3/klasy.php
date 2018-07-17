<?php 
class Produkt extends ProduktBazowy{
	private $wymiar, $waga;
	//konstruktor
	public  function __construct(){
		echo "Konstruktor produktu<br/>";
		$this->id = 1;
		$this->nazwa = "Kubek termiczny";
		$this->cena = 3.99;
		$this->opis = "Jakiś opis";
		$this->waga = "500g";
	}
	//destruktor
	public function __destruct(){
		echo "<br/>zniszczony produkt";
	}
	
	//setter all
	public function setAll($id, $nazwa, $cena, $opis, $zdjecie, $wymiar, $waga){
		$this->id = $id;
		$this->nazwa = $nazwa;
		$this->cena = $cena;
		$this->opis = $opis;
		$this->zdjecie = $zdjecie;
		$this->wymiar = $wymiar;
		$this->waga = $waga;
	}
	
	/***********************************************************/
	/**************************WYMIAR***************************/
	/***********************************************************/	
	public function setWymiar($wymiar){
		$this->wymiar = $wymiar;
	}

	public function getWymiar(){
		return $this->wymiar;
	}
	/***********************************************************/
	/***************************WAGA****************************/
	/***********************************************************/
	public function setWaga($waga){
		$this->waga = $waga;
	}

	public function getWaga(){
		return $this->waga;
	}	
}
?>