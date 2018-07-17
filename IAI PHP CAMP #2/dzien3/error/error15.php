<?php
error_reporting(E_ALL);

class A {
    private static $prefix = 'Pan(i)';
    private  $prefix2 = 'Pan(i)';
    public static function printName($name)
    {
        $ret = '';
        if (strlen($name) > 5) {
            $ret = self::$prefix . ' ' . $name;
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }
	 public function printName2($name)
    {
        $ret = '';
        if (strlen($name) > 5) {
            $ret = $this->prefix2 . ' ' . $name;
        } else {
            $ret = 'Siemanko ' . $name;
        }

        return $ret;
    }
}
echo (new A)->printName2($_GET['name']);
echo A::printName($_GET['name']);