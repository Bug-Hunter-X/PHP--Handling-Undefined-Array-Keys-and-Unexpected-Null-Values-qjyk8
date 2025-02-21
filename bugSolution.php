The most effective approach is to use PHP's null coalescing operator (`??`) to provide a default value when an array key is missing:

```php
<?php
$myArray = [];
$myArray["key1"] = 10;
$myArray["key2"] = 20;
$key3Value = $myArray["key3"] ?? 0; // Default value of 0 if "key3" is missing
echo $key3Value; // Outputs 0
?>
```

This ensures that even if "key3" is not set, the code will not produce an error and will have a default value to work with. 

For the array_key_exists() example, consider using isset() instead which will correctly identify missing keys, even if the value is 0:

```php
<?php
$myArr = ['a'=>0];
if(!isset($myArr['b'])){
  echo 'b key does not exist';
} else {
  echo 'b key exists and the value is: ' . $myArr['b'];
}
?>
```

This revised code accurately checks for the existence of the 'b' key, avoiding the issues encountered with array_key_exists() when dealing with 0 values.