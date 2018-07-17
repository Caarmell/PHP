
<?php 
	$jaki = 'style = background-color : yellow';
	$jaki2 = 'style = background-color : red';
	$litery = range("A", "T");	
	$liczba = range(0,19);
	
	echo "<br/>";
	$zmienna = "<table>";
	foreach($liczba as $klucz => $element)
	{
		$zmienna .= "<tr>";
		foreach($litery as $k => $e)
		{
			if($k+$element<19) $zmienna .= "<td style = \"background-color: red\">";
			else $zmienna .= "<td style = \"background-color: yellow\">";
			$zmienna .= $element.$e;
			$zmienna .= "</td>";
		}
		$zmienna .= "</tr>";
	}
	$zmienna .= "</table>";
	echo $zmienna;

?>