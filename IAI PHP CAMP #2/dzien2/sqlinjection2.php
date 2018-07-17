<?php 
$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
	mysqli_select_db($link, "phpcamp_mjaworska");
	$query = "delete from clients where id = ?";
	$zapytanie = mysqli_query($link, $query);
	
	$stmt = $link -> prepare($query);
	$stmt->bind_param(types "i")