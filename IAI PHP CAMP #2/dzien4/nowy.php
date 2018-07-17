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
	
echo json_encode($products);
?>