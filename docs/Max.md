# Max

- `v::max(mixed $maxValue)`
- `v::max(mixed $maxValue, boolean $inclusive = true)`

Validates if the input doesn't exceed the maximum value.

```php
v::int()->max(15)->validate(20); //false
v::int()->max(20)->validate(20); //true
v::int()->max(20, false)->validate(20); //false
```

Also accepts dates:

```php
v::date()->max('2012-01-01')->validate('2010-01-01'); //true
```

Also date intervals:

```php
// Same of minimum age validation
v::date()->max('-18 years')->validate('1988-09-09'); //true
```

`false` may be passed as a parameter to indicate that non-inclusive
values must be used.

Message template for this validator includes `{{interval}}`.

See also:

  * [Min](Min.md)
  * [Between](Between.md)
