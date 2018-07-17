<?php 
function delete($nr){
	$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	$query = "delete from products where id =$nr";
	$zapytanie = mysqli_query($link, $query);
}
	
?>