# Even

- `v::even()`

Validates an even number.

```php
v::integer()->even()->validate(2); //true
```

Using `integer()` before `even()` is a best practice.

See also

  * [Odd](Odd.md)
  * [Multiple](Multiple.md)
