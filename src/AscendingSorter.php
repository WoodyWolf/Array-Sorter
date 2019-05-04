<?php


namespace woodywolf\sorter;

class AscendingSorter implements SorterInterface
{
    public function doSorting(array $array): array
    {
        \sort($array);

        return $array;
    }
}
