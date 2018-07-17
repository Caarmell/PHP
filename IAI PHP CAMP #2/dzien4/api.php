<?php 
$products[] = array(
	"id"=> 1,
	"nazwa" => "towar 1",
	"cena"=>1.98);

$products[] = array(
	"id"=> 2,
	"nazwa" => "towar 2",
	"cena"=>5.98);

$products[] = array(
	"id"=> 3,
	"nazwa" => "towar 3",
	"cena"=>4.95);

$products[] = array(
	"id"=> 4,
	"nazwa" => "towar 4",
	"cena"=>11.29);

$products[] = array(
	"id"=> 1,
	"nazwa" => "towar 5",
	"cena"=>10.59);
	
//var_dump($products);

/*$nowa = "<br/>TABLICA PRZED AKCJAMI <br/><br/>";
	foreach($products as $tab){
		$nowa .= "ID: " . $tab['id'];
		$nowa .= " NAZWA: " . $tab['nazwa'];
		$nowa .= " CENA: "  . $tab['cena'];
		$nowa .= "<br/>";
	}
	
	echo $nowa;*/

if(isset($_GET['product']))$product = $_GET['product'];
else $product = 0;
if(isset($_GET['action']))$action = $_GET['action'];
else $action = "";
if(isset($_GET['name']))$name = $_GET['name'];
else $name = "";
if(isset($_GET['price']))$price = $_GET['price'];
else $price ="";

//$json = json_encode($products);
//print_r($json);

if($action === 'checkProduct'){
	$nowa = "<br/>TABLICA PO SPRAWDZENIU <br/><br/>";
	$jsontab = array();
	foreach($products as $tab)
	{
		if($tab['id'] == $product)
		{
			$nowa .= "<br/>";
			$nowa .= "ID: " . $tab['id'];
			$nowa .= " NAZWA: " . $tab['nazwa'];
			$nowa .= " CENA: " . $tab['cena'];
			$jsontab[]=$tab;
		}	
	}
	//echo $nowa;
	$json = json_encode($jsontab);
	print_r($json);
	
}
else if($action === 'addProduct'){
	$jsontab = array();
	if($product >= 1 && $product <=10)
	{
		$liczba =0;
		foreach($products as $tab)
		{
			if($tab['id'] == $product)
			{
				$nowa = "<br/>TAKIE ID JEST JUZ W BAZIE, WPISZ INNE! <br/><br/>";
				$liczba++;
			}
		}
		if($liczba == 0)
		{
			$products[]=array(
			"id"=>$product,
			"nazwa"=>$name,
			"cena"=>$price);
			$nowa = "<br/>TABLICA PO DODANIU <br/><br/>";
		}	
	}
		
	else 
		$nowa = "<br/>NIE DODANO, WPISZ POPRAWNE ID OD 1 DO 10 <br/><br/>";
	
	foreach($products as $tab){
		$nowa .= "ID: " . $tab['id'];
		$nowa .= " NAZWA: " . $tab['nazwa'];
		$nowa .= " CENA: "  . $tab['cena'];
		$nowa .= "<br/>";
		$jsontab[]=$tab;
	}
	$json = json_encode($jsontab);
	print_r($json);
	//echo $nowa;
}

else if($action === 'removeProduct'){	
	$nowa = "<br/>TABLICA PO USUNIĘCIU <br/>";
	$usuniete = 0;
	$jsontab = array();
	foreach($products as $tab)
	{
		if($tab['id'] != $product)
		{
			$nowa .= "<br/>";
			$nowa .= "ID: " . $tab['id'];
			$nowa .= " NAZWA: " . $tab['nazwa'];
			$nowa .= " CENA: " . $tab['cena'];
			$jsontab[]=$tab;
		}
		else {
			unset($tab);
			$usuniete ++;
		}
	}
	if($usuniete==0) $nowa .= "<br/><br/>NIE MA TAKIEGO ID W TABLICY, TABLICA NIEZMIENIONA! <br/>";
	//echo $nowa;
	$json = json_encode($jsontab);
	print_r($json);
}
?>