
<?php 
	$jaki = 'style = background-color : yellow';
	$jaki2 = 'style = background-color : red';
	$litery = range("A", "T");	
	$liczba = range(0,19);
		$i =9;
	echo "<br/>";
	$zmienna = "<table>";
	foreach($liczba as $klucz => $element)
	{
		$zmienna .= "<tr>";
		foreach($litery as $k => $e)
		{
			if($klucz < 10 && $k < 10){
				if($k > 9-$element) $zmienna .= "<td style = \"background-color: red\">";
				else $zmienna .= "<td style = \"background-color: yellow\">";
			}
			else if($klucz < 10 && $k >= 10){
				if($k > 9+$element) $zmienna .= "<td style = \"background-color: yellow\">";
				else $zmienna .= "<td style = \"background-color: red\">";
			}			
			
			$zmienna .= $element.$e;
			$zmienna .= "</td>";
		}
		$zmienna .= "</tr>";
	}
	$zmienna .= "</table>";
	echo $zmienna;

?>