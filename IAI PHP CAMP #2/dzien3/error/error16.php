<?php
error_reporting(E_ALL);
class Product {
    private static $cache;
    public function getName($id, $useCache = false)
    {
        //w tej metodzie wykonują się bardzo skomplikowane operacje
        if ($useCache) {
            if (!isset(self::$cache[$id])) {
                self::$cache[$id] = $this->_getName($id);
            }
            return self::$cache[$id];
        }
        return $this->_getName($id);
    }
    private function _getName($id)
    {
        sleep(1);
        return 'Nazwa towaru o id:' . $id;
    }
}

$objProduct = new Product();
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id, true) . '<br>';
}
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id, true) . '<br>';
}
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id, true) . '<br>';
}
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id, true) . '<br>';
}