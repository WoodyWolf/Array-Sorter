<?php


namespace woodywolf\sorter;

class Context
{
    /**
     * @var SorterInterface
     */
    private $sorter;

    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function setStrategy(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function execute(array $array): array
    {
        return $this->sorter->doSorting($array);
    }
}
