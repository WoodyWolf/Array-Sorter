Array Sorter
===============

Library for sorting arrays



Installation
------------

To install this library run

```
$ composer require woodywolf/sorter
```

Usage
-----

Ascending Sorting

```php
$array = ['c','a','t'];
$sorter = new Context(new AscendingSorter());
$sortedarray = $sorter->execute($array);
```

Descending Sorting 

```php
$array = ['c','a','t'];
$sorter = new Context(new DescendingSorter());
$sortedarray = $sorter->execute($array);
```



