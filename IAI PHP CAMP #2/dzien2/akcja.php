<?php 
	 if(isset($_POST['edyt'])) $edycja = 1;
	 else $edycja = 0;
	 if(isset($_POST['usun'])) $usun = 1;
	 else $usun = 0;
	 
	 $str = $_POST['hiddenNR'];
	 echo $idu = $_POST['hidden'];
	 
	 if($edycja == 1)
	 {
		$link = mysqli_connect("127.0.0.1", "root", "Hek3i3SN");
		mysqli_select_db($link, "phpcamp_mjaworska");
		$query = "select * from clients where id =". $_POST['hidden'];
		$zapytanie = mysqli_query($link, $query);
		$wynik = mysqli_fetch_assoc($zapytanie);
		?>
		<form action="dodanie.php" method="POST">
		<table>
				<tr>
					<td><label> IMIE </label><br/><br/></td>
					<td><input style="width:300px" name="imie" required="required" value="<?php echo $wynik['name']; ?>"><br/><br/></td>
				</tr>
				<tr>
					<td><label> NAZWISKO </label><br/><br/></td>
					<td><input style="width:300px" name="nazwisko" required="required" value="<?php echo $wynik['surname']; ?>"><br/><br/></td>
					
				</tr>
				<tr>
					<td><label> PŁEĆ </label><br/><br/></td>
					<td>
					<?php 
						if($wynik['gender'] == 'female')
							echo "<select name=\"plec\">
							<option selected=\"selected\">FEMALE</option>
							<option>MALE</option>
							<option>UNKNOWN</option>
							</select><br/><br/>";
						else if($wynik['gender'] == 'male')
							echo "<select name=\"plec\">
							<option>FEMALE</option>
							<option selected=\"selected\">MALE</option>
							<option>UNKNOWN</option>
							</select><br/><br/>";
						else
						echo "<select name=\"plec\">
							<option>FEMALE</option>
							<option>MALE</option>
							<option selected=\"selected\">UNKNOWN</option>
							</select><br/><br/>";
					?>
					</td>
				</tr>
				<tr>
					<td><label> DATA URODZENIA: </label><br/><br/></td>
					<td><input style="width:300px" name="data" required="required" value="<?php echo $wynik['date_of_birth']; ?>"><br/><br/></td>
				</tr>
				<tr>
					<td><label> LICZBA ZAMÓWIEŃ </label><br/><br/></td>
					<td><input style="width:300px" name="liczbazam" value="<?php echo $wynik['orders_count']; ?>"><br/><br/></td>
				</tr>
				<tr>
					<td><label> ULICA </label><br/><br/></td>
					<td><textarea rows="2" cols="40" name="ulica" required="required" value="<?php echo $wynik['street']; ?>"></textarea><br/><br/></td>
				</tr>
				<tr>
					<td><label> MIASTO </label><br/><br/></td>
					<td><input style="width:300px" name="miasto" required="required" value="<?php echo $wynik['city']; ?>"><br/><br/></td>
				</tr>
				<tr>
					<td><label> KOD POCZTOWY </label><br/><br/></td>
					<td><input style="width:300px" name="kod" required="required" value="<?php echo $wynik['postcode']; ?>"><br/><br/></td>
				</tr>
				<tr>
					<td><label> PAŃSTWO</label><br/><br/></td>
					<td><input style="width:300px" name="panstwo" value="<?php echo $wynik['country']; ?>"><br/><br/></td>
				</tr>
				<tr>
					<td><label> NOTATKI </label><br/><br/></td>
					<td><textarea rows="2" cols="40" name="notki" value="<?php echo $wynik['notes']; ?>"></textarea><br/><br/></td>
				</tr>
				<tr>
					<td><td><input type="submit" id="button" name="edycjaWyslij" value="OK"></td></td>
				</tr>
				<tr>
					<td><input type="hidden" name ="hidden" value=" <?php echo $_POST['hidden'] ?>"/><input type="hidden" name ="hiddenNR" value=" <?php echo $_POST['hiddenNR'] ?>"/></td>
				</tr>
		</table>
	</form>
<?php
	 }
 
 
?>