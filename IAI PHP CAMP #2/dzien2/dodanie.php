<?php
		if(isset($_POST['edycjaWyslij']))
		{
			$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
			mysqli_select_db($link, "phpcamp_mjaworska");
			$nr=$_POST['hiddenNR'];
			$nr = str_replace(' ', '', $nr);
			$idu = $_POST['hidden'];
			echo $idu;
			$strona = "/IAI_Camp/dzien2/wyswietlanie.php?page=" . $nr;
			echo $strona;
			/*update clients set name='Bartosz', surname='Wróbel', gender='male', date_of_birth='1994-06-07', orders_count='200',
			street='podkarpacka', city='rzeszow', postcode='35-080', country='1', notes='' where id=975009*/

			
			$query = "update clients set name='".$_POST['imie']."', surname='".$_POST['nazwisko']."', gender= '".$_POST['plec']."',
						date_of_birth='".$_POST['data']."', orders_count='".$_POST['liczbazam']."', street='".$_POST['ulica']."',
						city= '".$_POST['miasto']."', postcode='".$_POST['kod']."', country='".$_POST['panstwo']."', notes='".$_POST['notki']."'
						where id=".$idu;
			$zapytanie = mysqli_query($link, $query);
			//header("Location: $strona");
		}