<html>
<head>

</head>
<body>
<?php 
	$jaki = 'style = background-color : yellow';
	$jaki2 = 'style = background-color : red';
	$litery = range("A", "T");	
	$liczba = range(0,19);
	$kolor = 1;
	echo "<br/>";
	//var_dump($camp);
	//print_r($litery);
	//print_r($liczba);
	$zmienna = "<table>";
	foreach($liczba as $klucz => $element)
	{
		$zmienna .= "<tr>";
		foreach($litery as $k => $e)
		{
			if($kolor == 1) $zmienna .= "<td style = \"background-color: red\">";
			else $zmienna .= "<td style = \"background-color: yellow\">";
			$zmienna .= $element.$e;
			$zmienna .= "</td>";
			if($kolor == 1) $kolor =0;
			else $kolor = 1;
		}
		$zmienna .= "</tr>";
		if($kolor == 1) $kolor =0;
			else $kolor = 1;
	}
	$zmienna .= "</table>";
	echo $zmienna;

?>
</body>
</html>