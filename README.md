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
$sorter = new Sorter(new AscendingSorter());
$sortedarray = $sorter->sort($array);
```

Descending Sorting 

```php
$array = ['c','a','t'];
$sorter = new Sorter(new DescendingSorter());
$sortedarray = $sorter->sort($array);
```

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Andrey Baranchuk


