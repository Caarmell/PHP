<!DOCTYPE html>

<html>
    <head>
        <title>AJAX #3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
       
        <?php 
			require_once('zad.php');
			
			$akcja = (isset($_GET['akcja'])) ? $_GET['akcja'] : null;
			switch($akcja)
			{
				case 'usun':
					if(isset($_GET['id']))
						delete($_GET['id']);
				break;
				case 'dodaj':
				break;
				case 'edytuj':
					if(isset($_GET['id']))
						edytuj($_GET['id']);
				break;
				
			}
			tabela();
		?>
        <script type="text/javascript">
                function usun(id) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                  }
                };
                xhttp.open("GET", "http://localhost:8080/IAI_Camp/ajax/ajax3.php?akcja=usun&id="+id, true);
                xhttp.send();
            }
			
			 function edytuj(id) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                  }
                };
                xhttp.open("GET", "http://localhost:8080/IAI_Camp/ajax/ajax3.php?akcja=edytuj&id="+id, true);
                xhttp.send();
            }
        </script>
    </body>
</html>
