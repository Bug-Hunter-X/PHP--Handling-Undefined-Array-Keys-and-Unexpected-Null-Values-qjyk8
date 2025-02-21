In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this example:

```php
<?php
$myArray = [];
$myArray["key1"] = 10;
$myArray["key2"] = 20;
echo $myArray["key3"]; // Notice: Undefined index: key3 in ...
?>
```

This code attempts to access the element with key "key3", which doesn't exist.  PHP's default behavior is to trigger a Notice, but this can be easily overlooked. More problematic is that PHP's loose typing will return a value of null, possibly causing hidden bugs in later computations that rely on a default value being returned if the key is missing.

Another instance of this is with array_key_exists().  Testing for a value before accessing it is good defensive programming, but in cases where 0 is a valid value in an array, it will cause incorrect results. Consider this:

```php
<?php
$myArr = ['a'=>0];
if(!array_key_exists('b',$myArr)){
  echo 'b key does not exist';
} else {
  echo 'b key exists and the value is: ' . $myArr['b'];
}
?>
```

This code will not trigger the conditional and echo the second block even if 'b' does not exist, as it is considered a valid value within the array.  
This can often mask bugs and lead to unexpected behavior in larger programs.