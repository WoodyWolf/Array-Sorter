
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use woodywolf\sorter\Context;
use woodywolf\sorter\AscendingSorter;
use woodywolf\sorter\DescendingSorter;

$array = ['c','a','t'];
$sorter = new Context(new AscendingSorter());
$sorted_array = $sorter->execute($array);
\print_r($sorted_array);

$array = ['c','a','t'];
$sorter = new Context(new DescendingSorter());
$sorted_array = $sorter->execute($array);
\print_r($sorted_array);
