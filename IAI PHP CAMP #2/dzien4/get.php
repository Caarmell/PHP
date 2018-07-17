<?php 
$path =$_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);
$ch = curl_init("http://localhost:8080/IAI_Camp/dzien4/cw5.php/productlist");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$responce = json_decode($result,1);
echo "<pre>";
print_r($responce);
echo "</pre>";			
?>