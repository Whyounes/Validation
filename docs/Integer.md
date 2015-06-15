# Integer

- `v::integer()`

Validates if the input is an integer.

```php
v::integer()->validate('10'); //true
v::integer()->validate(10); //true
```

See also:

  * [Numeric](Numeric.md)
  * [Digit](Digit.md)
