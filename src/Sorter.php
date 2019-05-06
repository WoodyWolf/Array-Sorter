<?php


namespace woodywolf\sorter;


class Sorter
{
    /**
     * @var SorterInterface
     */
    private $sorter;

    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function setStrategy(SorterInterface $sorter) : void
    {
        $this->sorter = $sorter;
    }

    public function sort(array $array): array
    {
        return $this->sorter->doSorting($array);
    }
}
