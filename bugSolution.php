The solution is to use the strict comparison operator (`===`) instead of the loose comparison operator (`==`).  The strict comparison operator (`===`) verifies that both the values and types are identical before returning `true`.

```php
<?php
$string = "10abc";
$number = 10;

if ($string === $number) {
  echo "Strings are equal!";
} else {
  echo "Strings are NOT equal!";
}
?>
```

Using `===` in this case will correctly determine that the string "10abc" is not strictly equal to the integer 10 because their types are different. The output of the corrected code will be "Strings are NOT equal!", reflecting the accurate comparison.