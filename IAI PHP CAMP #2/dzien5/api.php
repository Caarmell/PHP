<?php 
$key ="0138cc4d3eeb0ba933967e432dae38f3";
$ch = curl_init("http://tank.iai.ninja/api/get-current-board.php/key=$key");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$responce = json_decode($result,1);
echo "<pre>";
print_r($responce);
echo "</pre>";		
$ustawienia = $responce['settings'];
$rozmiar = $ustawienia['boardSize'];

$kwadrat = $rozmiar * $rozmiar;
$board = $responce['board'];
$tab_pos = array();
$j=0;


for($i = 0; $i < $kwadrat; $i++)
{
	if($board[$i]['type'] =='obstacle')
	{
		$nowa = $board[$i]['position'];
		$jakapozycja;
		 $byte = substr($nowa, $j);
		 if($byte >= 'A' && $byte <= 'Z')
			{
				$co = $i*26 + (ord($byte) - 65);
				$jakapozycja += $co;
			}
			else $jakapozycja .= $nowa[$j];
		$tab_pos[$j]['pos'] = $board[$i]['position'];
		$tab_pos[$j]['typ'] = $board[$i]['type'];
		$tab_pos[$j]['jakapoz'] = $jakapozycja;
		$j++;
	}
	
}

echo "<pre>";
print_r($tab_pos);
echo "</pre>";
/*echo "<table>";
$tab = array();
$t = 64;
$ile = $rozmiar / 26 ;
for($a = 1; $a <= $rozmiar; $a++)
{
	$t++;
	$nowa = "";
	$z = $t;
	for($i=0; $i < $ile; $i++)
	{
		$nowa .= chr($z);
		$z++;
	}
	$tab[$a] = $nowa;
}
for($i = 1; $i <=$rozmiar; $i++)
{
	echo "<tr>";
	for($j=1; $j <=$rozmiar; $j++)
	{
		echo "<td>".$tab[$i].$j."</td>";
	}
	echo "</tr>";
}

echo "</table>";*/	
?>