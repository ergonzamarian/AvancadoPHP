<?php

//PHP só suporta em listas, string e inteiro - Devemos ser consistentes no momento de programar!
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'

];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
