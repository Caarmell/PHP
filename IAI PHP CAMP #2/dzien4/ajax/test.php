<?php 
error_reporting(0);
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
	"nazwa" => "towar5",
	"cena"=>10.59);
	
$path =$_SERVER['PATH_INFO'];
//die();
$pathArray = explode('/', $path);
//print_r($pathArray);
//die();
$zasob = $pathArray[1];
$idT = $pathArray[2];
$method = $_SERVER['REQUEST_METHOD'];
$produkty = array();
switch($method)
{
	case 'GET':
			if($idT !== null){
				foreach($products as $prod)
				{
					if($prod['id'] == $idT)
						$produkty[] = $prod;
				}
			}
			else {
				foreach($products as $prod)
				{
						$produkty[] = $prod;
				}
			}
			
		break;
	
	case 'PUT':
			$params = json_decode(file_get_contents('php://input'), 1); //przekazanie danych postem
		break;
	
	case 'POST':
			$params = json_decode(file_get_contents('php://input'), 1); //przekazanie danych postem
		break;
	
	case 'DELETE':
		break;
	
	default:
}
echo json_encode($produkty);
?>