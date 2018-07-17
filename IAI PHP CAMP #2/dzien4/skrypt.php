<?php 
$ch = curl_init("http://localhost:8080/IAI_Camp/dzien4/api.php?action=checkProduct&product=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//print_r($result);
echo '<pre>';
print_r(json_decode($result, true));
echo '</pre>';
?>