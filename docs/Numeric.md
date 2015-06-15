# Numeric

- `v::numeric()`

Validates on any numeric value.

```php
v::numeric()->validate(-12); //true
v::numeric()->validate('135.0'); //true
```

See also:

  * [Integer](Integer.md)
  * [Digit](Digit.md)
