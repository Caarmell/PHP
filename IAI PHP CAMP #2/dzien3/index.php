<?php 
require_once("produktBazowy.php");
require_once("klasy.php");
require_once("wirtualna.php");

//utworzenie obiektu klasy produkt
$pierwszyObiekt = new Produkt;
//wywolanie nieistniejącego pola - stworzy nowe pole
//$pierwszyObiekt->a=1;
//zmiana ceny
//$pierwszyObiekt->setCena(1000);
//pobieranie ceny
//echo $pierwszyObiekt->getCena() . "<br/>";
//co w obiekcie
var_dump($pierwszyObiekt);

//utworzenie obiektu klasy wirtualnej
$wirtualnyObiekt = new WirtualneProdukty;
//$wirtualnyObiekt = null; //dziala destruktor, php wersja 7.0.13
//echo "jestem po nullu";
//ustawienie wartości
echo "<br/>";
$wirtualnyObiekt->setAll(1, "produkt wirtualny", 1.99, "opis wirtualny", "zdjeciewirtualne","zalacznikwirtualny", "kluczwirtualny", "500kB");
try{
	//$wirtualnyObiekt->a=1;
	//echo $pierwszyObiekt->cenafgdf;
	//$wirtualnyObiekt->metoda("cos");
	//if(isset($wirtualnyObiekt->nowa));
	//unset($wirtualnyObiekt); //dziala destruktor
	unset($wirtualnyObiekt->id);
	
}catch(Exception $e){
	echo $e;
	echo "<br/><br/>";
}

var_dump($wirtualnyObiekt);
echo "<br/>";
echo "<br/>";
$pierwszyObiekt->setAll(1, "produkt produkt", 5.99, "opis produkt", "zdjecie produkt","waga produktu", "wymiar produktu");
var_dump($pierwszyObiekt);
echo "<br/>";
echo "<br/>Koniec";
die("<br/>koncze skrypt");

?>