shuffle_slightly
================

Function to slightly shuffle an array based on a tolerance parameter.

There may come a time when you want to shuffle an array but you don't want to completely ignore the order. This function, which behaves much like the native [shuffle](http://us1.php.net/manual/en/function.shuffle.php), will perform a slight shuffle.

For example, if you want to shuffle a simple array but you don't want to move any elements more than 2 positions away from their start, just do this.

```php
$array = ['a', 'b', 'c', 'd', 'e'];
jacobemerick\shuffle_slightly($array, 2);
```

## Installation

Through [composer](http://getcomposer.org):

```bash
$ composer require jacobemerick/shuffle_slightly:~1.0
```

## More Information

I wrote a [blog post](http://blog.jacobemerick.com/web-development/slightly-shuffled/) talking about the reasoning, build, and some extra information about shuffling algorithms.

