<?php


require_once __DIR__ . '/../vendor/autoload.php';


use woodywolf\sorter\Context;
use woodywolf\sorter\AscendingSorter;
use woodywolf\sorter\DescendingSorter;
use woodywolf\sorter\NullObjectSorter;

$Ascending = new AscendingSorter();
$Descending = new DescendingSorter();
$NullObject = new NullObjectSorter();

$array=[3,2,7,1,4,5,6];
$array2=['c','a','t'];



$Context = new Context($Ascending);
\var_dump($Context->execute($array2));


$Context1= new Context($NullObject);
\var_dump($Context1->execute($array));
