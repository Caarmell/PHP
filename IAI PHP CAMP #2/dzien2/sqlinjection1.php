<?php 
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	$query = "select * from clients where id = " . $_GET['id'];
	$zapytanie = mysqli_query($link, $query);
	$nowa ="";
	while($wynik = mysqli_fetch_assoc($zapytanie)){
		$nowa .= "<b>Imie: </b>" . htmlspecialchars($wynik['name']) . " <b>nazwisko:</b> ". $wynik['surname'];
		$nowa .= " <b>płeć:</b> " . $wynik['gender'] . " <b>data urodzenia:</b> " . $wynik['date_of_birth'];
		$nowa .= " <b>liczba zamówień:</b> " . $wynik['orders_count'] . " <b>miasto:</b> " . $wynik['city']."<br/>";	
	}
	echo $nowa;
?>