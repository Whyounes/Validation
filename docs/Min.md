# Min

- `v::min(mixed $minValue)`
- `v::min(mixed $minValue, boolean $inclusive = true)`

Validates if the input is greater than the minimum value.

```php
v::int()->min(15)->validate(5); //false
v::int()->min(5)->validate(5); //true
v::int()->min(5, false)->validate(5); //false
```

Also accepts dates:

```php
v::date()->min('2012-01-01')->validate('2015-01-01'); //true
```

`false` may be passed as a parameter to indicate that non-inclusive
values must be used.

Message template for this validator includes `{{interval}}`.

See also:

  * [Max](Max.md)
  * [Between](Between.md)
