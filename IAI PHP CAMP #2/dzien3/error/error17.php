<?php
error_reporting(E_ALL);

ini_set("memory_limit","64M");



require_once 'bigtable.php';
function getBigTable()
{
    global $arr;
    return $arr;
}

$all = [];

foreach ($all=range(1,100) as $stockId) {
    require 'bigtable.php';
    $all[$stockId] = getBigTable();
}

var_Dump('tablica zawiera ' . count($all) . 'Elementow');
