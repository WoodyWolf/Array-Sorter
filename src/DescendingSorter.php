<?php


namespace woodywolf\sorter;

class DescendingSorter implements SorterInterface
{
    public function doSorting(array $array): array
    {
        \rsort($array);

        return $array;
    }
}
