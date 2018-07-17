<?php
error_reporting(0);


class A {

    public function printInfo($name, $validateName)
    {
        if ($validateName == true) {
            if ( strpos($name, 'Mateusz' ) !== false) {
                //sprawdzamy czy imie mateusz znajduje sie w przekazanej nazwie
                echo 'Witaj Mateusz!';
            } else {
                echo 'To nie Ty Mateusz!';
            }
        } else {
            echo 'czesc ' . $name ;
        }
    }
}

(new A)->printInfo($_GET['name'], $_GET['validateName']);