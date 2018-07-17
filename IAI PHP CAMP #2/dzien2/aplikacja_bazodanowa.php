<html>
<body>
<?php 
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	/*$query = "select * from clients limit 13 ";
	$zapytanie = mysqli_query($link, $query);
	$nowa ="";
	while($wynik = mysqli_fetch_assoc($zapytanie)){
		$nowa .= "<b>Imie: </b>" . $wynik['name'] . " <b>nazwisko:</b> ". $wynik['surname'];
		$nowa .= " <b>płeć:</b> " . $wynik['gender'] . " <b>data urodzenia:</b> " . $wynik['date_of_birth'];
		$nowa .= " <b>liczba zamówień:</b> " . $wynik['orders_count'] . " <b>miasto:</b> " . $wynik['city']."<br/>";	
	}
	echo $nowa;*/
	
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$plec = $_POST['plec'];
	$data = $_POST['data'];
	$ulica = $_POST['ulica'];
	$miasto = $_POST['miasto'];
	$kod = $_POST['kod'];
	$notki = $_POST['notki'];
	
	if($_POST['panstwo'] == "") $panstwo = 1;
	else $panstwo = $_POST['panstwo'];
	
	if($_POST['liczbazam'] == "") $liczbazam = rand(1, 10000);
	else $liczbazam = $_POST['liczbazam'];
	
	$nowa = $imie . " " . $nazwisko ." " . $plec ." " .$data ." " . $liczbazam ." " .$ulica;
	$nowa .= " " . $kod ." " .$panstwo ." " .$notki;

    //echo $nowa;
	$query = "insert into clients (name, surname, gender, date_of_birth, orders_count, street, city, postcode, country, notes)
				values (\"$imie\", \"$nazwisko\", \"$plec\", \"$data\", \"$liczbazam\", \"$ulica\", \"$miasto\", \"$kod\", \"$panstwo\", \"$notki\")";
	
	$zapytanie = mysqli_query($link, $query);
	if($zapytanie) echo "Pomyślnie dodano dane!";
?>
</body>
</html>
