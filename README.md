# grid.php

I was drunk for the first time in a long time...that made me want to use an array as a "grid"...so fuck it, here you go, you can do it to.

Include 'grid.php' and you will have access to the following functions

 * grid() - Get a character at x y, return the character
 * plot() - Set a character at x y. return the new grid
 * addYnums() - Add y axis numbers for the "height" of the grid
 
See grid.php or ExampleGrid.php for some examples

I recommend setting your "grid" out something like this to make working with it eaiser : 

```php
$grid = [
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|........................",
"|________________________"
];
```
