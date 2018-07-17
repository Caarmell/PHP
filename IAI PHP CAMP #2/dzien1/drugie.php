<html>
<body>
<?php 
	$camp = array(1 => "Marta",
					'1' => "Jaworska",
					1.99 => "Rzeszów",
					true => "Gniewko");
					
	echo "<br/>";
	var_dump($camp);
	$camp[4] = "nowy element";
	echo "<br/>";
	var_dump($camp);
	$camp[] = "Kot ma Alę";
	echo "<br/>";
	var_dump($camp);
	unset($camp[5]);
	echo "<br/>";
	var_dump($camp);
	$camp[] = "Ala też ma zawsze 'jakies ale'";
	echo "<br/>";
	var_dump($camp);
	$tablica_intow = [1,2,3,4,5];
	$camp[] = $tablica_intow;
	echo "<br/>";
	var_dump($camp);

?>
</body>
</html>