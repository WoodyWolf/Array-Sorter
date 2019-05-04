Array Sorter
===============

This library can sort array.In ascending and descending way



Installation
------------

To install this library run

```
$ composer require WoodyWolf/Array-Sorter
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



