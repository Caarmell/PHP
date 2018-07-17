<html>
<head>
<meta charset="UTF-8" />
<style>
.wyglad{
		border: solid 1px;
		text-align: center;
	}
	
	.wyglad td, tr, th{
		border: solid 1px;
		width: 100px;
	}
</style>
</head>

<?php 

	
function tabela(){
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	
	echo '<div id="demo"><table class="wyglad">';
	echo "<tr style = \"background-color: #009966\"><th>ID</th>";
	echo "<th>NAZWA</th>";
	echo "<th>CENA</th>";
	echo "<th>OPERACJE</th></tr>";
	$kolor = 0;
	$nowa = "";
	
	$query = "select * from products";
	$zapytanie = mysqli_query($link, $query);

	while($wynik=mysqli_fetch_assoc($zapytanie))
	{
		if($kolor == 1) $nowa .= "<tr style = \"background-color: #66ff66\">";
		else $nowa .= "<tr style = \"background-color: #99ff99\">";
		$nowa .= "<td>".$wynik['id']."</td>";
		$nowa .= "<td>".$wynik['nazwa']."</td>";
		$nowa .= "<td>".$wynik['cena']."</td>";
		$nowa .= '<td style="width:250px;"><button onclick="usun('.$wynik['id'].')">USUŃ</button>
					<button>DODAJ</button>
					<button onclick="edytuj('.$wynik['id'].')">EDYTUJ</button></td></tr>';
		if($kolor == 0) $kolor = 1;
		else $kolor = 0;
	}
	echo $nowa;
	echo "</table></div>";
}

function delete($nr){
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	$query = "delete from products where id =$nr";
	$zapytanie = mysqli_query($link, $query);
}


function edytuj($nr){
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	$query = "delete from products where id =$nr";
	$zapytanie = mysqli_query($link, $query);
}
?>
