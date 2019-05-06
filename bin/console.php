
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use woodywolf\sorter\Sorter;
use woodywolf\sorter\AscendingSorter;
use woodywolf\sorter\DescendingSorter;
use woodywolf\sorter\NullObjectSorter;

$array = ['c','a','t'];
$sorter = new Sorter(new AscendingSorter());
$sorted_array = $sorter->sort($array);
\print_r($sorted_array);

$array = ['c','a','t'];
$sorter = new Sorter(new NullObjectSorter());
$sorted_array = $sorter->sort($array);
\print_r($sorted_array);

$sorter->setStrategy(new DescendingSorter());
$sorted_array = $sorter->execute($array);
\print_r($sorted_array);
