<?php

namespace woodywolf\sorter;

class NullObjectSorter implements SorterInterface
{
    public function doSorting(array $array): array
    {
        return $array;
    }
}
