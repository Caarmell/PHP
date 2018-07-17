<?php 
	class WirtualneProdukty extends ProduktBazowy{
		private $zalacznik, $klucz, $rozmiarPliku;
		//konstruktor
		public  function __construct(){
			echo "Konstruktor klasy wirtualnej<br/>";
		}
		
		//destruktor
		public function __destruct(){
			echo "<br/>zniszczony wirtualny produkt";
		}
		
		//setter all
		public function setAll($id, $nazwa, $cena, $opis, $zdjecie, $zalacznik, $klucz, $rozmiarPliku){
			$this->id = $id;
			$this->nazwa = $nazwa;
			$this->cena = $cena;
			$this->opis = $opis;
			$this->zdjecie = $zdjecie;
			$this->zalacznik = $zalacznik;
			$this->klucz = $klucz;
			$this->rozmiarPliku = $rozmiarPliku;
		}
	/***********************************************************/
	/*************************ZAŁĄCZNIK*************************/
	/***********************************************************/		
		public function setZalacznik($zalacznik){
			$this->zalacznik = $zalacznik;
		}

		public function getZalacznik(){
			return $this->zalacznik;
		}	
	/***********************************************************/
	/**************************KLUCZ****************************/
	/***********************************************************/		
		public function setKlucz($klucz){
			$this->klucz = $klucz;
		}

		public function getKlucz(){
			return $this->klucz;
		}
	/***********************************************************/
	/*********************ROZMIAR PLIKU*************************/
	/***********************************************************/		
		public function setRozmiarPliku($rozmiarPliku){
			$this->rozmiarPliku = $rozmiarPliku;
		}

		public function getRozmiarPliku(){
			return $this->rozmiarPliku;
		}
	}
?>