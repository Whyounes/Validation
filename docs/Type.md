# Type

- `v::type(string $type)`

Validates the type of input.

```php
v::type('bool')->validate(true); //true
v::type('callable')->validate(function (){}); //true
v::type('object')->validate(new stdClass()); //true
```

See also

  * [Arr](Arr.md)
  * [Boolean](Boolean.md)
  * [Float](Float.md)
  * [Instance](Instance.md)
  * [Integer](Integer.md)
  * [Object](Object.md)
  * [Str](Str.md)
