<?php

class A {
    private $a = 'a';
    private $variable1 = 'variable';
    private $variable2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eleifend consectetur bibendum. Nullam finibus feugiat purus at porta. Quisque sodales, ipsum vel venenatis hendrerit, lorem odio bibendum velit, mollis convallis purus dui in eros. Sed ultricies eget dolor et tempor. Maecenas in ullamcorper erat. Nunc malesuada placerat neque sit amet aliquam. Ut pharetra diam in ex mollis, a molestie tellus tristique. Donec fringilla sollicitudin turpis, eget sodales sapien commodo sit amet. Donec neque dui, efficitur sed ipsum vel, tempor laoreet mauris. Proin ut mauris rutrum, tristique ex eu, tincidunt lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean tortor eros, tincidunt quis leo vel, condimentum ultricies ipsum. Morbi a massa enim. Nulla feugiat tempus nunc. Donec sagittis nec sapien a blandit.

Integer efficitur nunc nec nunc facilisis, dignissim aliquam ligula dignissim. Nam blandit, sapien sit amet auctor euismod, urna arcu vestibulum est, sit amet fringilla arcu magna in massa. Cras placerat tellus sed dictum ultrices. Vestibulum consectetur pretium tortor, a convallis nulla tincidunt ut. Vestibulum lacinia at nibh sit amet egestas. Fusce blandit auctor blandit. Suspendisse convallis consequat lectus, ut malesuada quam egestas quis. Ut luctus leo lacus, mollis suscipit quam tristique quis. Curabitur pulvinar lacus nec eleifend tempor. Duis vitae tincidunt tellus. Aliquam ut lacus vitae elit laoreet ornare ac vitae neque. Aenean sed ornare ligula. Aenean imperdiet vestibulum vulputate. Sed consectetur at felis at aliquet. Ut sed orci ipsum. Cras vehicula, est quis congue iaculis, ipsum nunc gravida nisi, et convallis massa metus vel arcu.';
    private $variable3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eleifend consectetur bibendum. Nullam finibus feugiat purus at porta. Quisque sodales, ipsum vel venenatis hendrerit, lorem odio bibendum velit, mollis convallis purus dui in eros. Sed ultricies eget dolor et tempor. Maecenas in ullamcorper erat. Nunc malesuada placerat neque sit amet aliquam. Ut pharetra diam in ex mollis, a molestie tellus tristique. Donec fringilla sollicitudin turpis, eget sodales sapien commodo sit amet. Donec neque dui, efficitur sed ipsum vel, tempor laoreet mauris. Proin ut mauris rutrum, tristique ex eu, tincidunt lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean tortor eros, tincidunt quis leo vel, condimentum ultricies ipsum. Morbi a massa enim. Nulla feugiat tempus nunc. Donec sagittis nec sapien a blandit.

Integer efficitur nunc nec nunc facilisis, dignissim aliquam ligula dignissim. Nam blandit, sapien sit amet auctor euismod, urna arcu vestibulum est, sit amet fringilla arcu magna in massa. Cras placerat tellus sed dictum ultrices. Vestibulum consectetur pretium tortor, a convallis nulla tincidunt ut. Vestibulum lacinia at nibh sit amet egestas. Fusce blandit auctor blandit. Suspendisse convallis consequat lectus, ut malesuada quam egestas quis. Ut luctus leo lacus, mollis suscipit quam tristique quis. Curabitur pulvinar lacus nec eleifend tempor. Duis vitae tincidunt tellus. Aliquam ut lacus vitae elit laoreet ornare ac vitae neque. Aenean sed ornare ligula. Aenean imperdiet vestibulum vulputate. Sed consectetur at felis at aliquet. Ut sed orci ipsum. Cras vehicula, est quis congue iaculis, ipsum nunc gravida nisi, et convallis massa metus vel arcu.';
    public $arr = [1,2,3,4,5];
    public function __construct()
    {
        $this->array = range(1, 1000);
        $this->id = '1337';
        $this->a = range('a', 'Z');
    }

    public function fn1($arg1, $arg2, $arg3, $arg4)
    {
        echo FOO;
    }
    private function fn2($arg1, $arg2, $arg3, $arg4)
    {
        //
    }
    public function getMessageFrom($get)
    {
        $ret = '';
        if ($get['name']) {
            $tmp = 'czesc ' . $get['name'] . '!';
        }

        if ($get['age'] > 35) {
            return $tmp . ' Możesz startować na prezydenta ';
        } else {
           return $tmp . 'jestes za mlody(a) na prezydenta';
        }
    }
}

$objA = new A();

echo $objA->getMessageFrom($_GET);

