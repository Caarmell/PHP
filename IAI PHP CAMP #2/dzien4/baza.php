<?php 
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	
	if(isset($_GET['product']))$product = $_GET['product'];
	else $product = 0;
	if(isset($_GET['action']))$action = $_GET['action'];
	else $action = "";
	if(isset($_GET['name']))$name = $_GET['name'];
	else $name = "";
	if(isset($_GET['price']))$price = $_GET['price'];
	else $price ="";
	
	if($action === 'checkProduct'){
		$query = "select * from products where id=$product";
		$zapytanie = mysqli_query($link, $query);
		$nowa ="";
		while($wynik = mysqli_fetch_assoc($zapytanie)){

			$nowa .= "ID: " . $wynik['id'];
			$nowa .= " NAZWA: " . $wynik['nazwa'];
			$nowa .= " CENA: " . $wynik['cena'];
		}
		echo $nowa;
	}
	else if($action === 'addProduct'){
		$query = "insert into products (id, nazwa, cena) values($product, '".$name."', '".$price."'";
		$zapytanie = mysqli_query($link, $query);
		$query = "select * from products";
		$zapytanie = mysqli_query($link, $query);
		$nowa ="";
		while($wynik = mysqli_fetch_assoc($zapytanie)){

			$nowa .= "ID: " . $wynik['id'];
			$nowa .= " NAZWA: " . $wynik['nazwa'];
			$nowa .= " CENA: " . $wynik['cena'];
		}
		echo $nowa;
		
	}
	else if($action === 'removeProduct'){
		$query = "delete from products where id = $product";
		$zapytanie = mysqli_query($link, $query);
		$query = "select * from products";
		$zapytanie = mysqli_query($link, $query);
		$nowa ="";
		while($wynik = mysqli_fetch_assoc($zapytanie)){

			$nowa .= "ID: " . $wynik['id'];
			$nowa .= " NAZWA: " . $wynik['nazwa'];
			$nowa .= " CENA: " . $wynik['cena'];
		}
		echo $nowa;
	}
	
?>