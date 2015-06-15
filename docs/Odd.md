# Odd

- `v::odd()`

Validates an odd number.

```php
v::integer()->odd()->validate(3); //true
```

Using `integer()` before `odd()` is a best practice.

See also

  * [Even](Even.md)
  * [Multiple](Multiple.md)
