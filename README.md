# almost-equals
Compare floats for equality. 

```php
namespace Jstewmc\AlmostEquals;

// instantiate the service
$service = new AlmostEquals();

// compare stuff!
$service(1/10, 0.1);  // returns true (0.1 === 0.1)
$service(2/10, 0.1);  // returns false (0.2 !== 0.1)
```

Floating point numbers should never be compared for equivalence because of the way they are stored internally. They have limited precision, and many numbers that are representable as floating point numbers in base-10 (e.g., `0.1` or `0.7`) do not have an exact representation in base-2.

## Epsilon

To test floating point values for equality, an upper bound on the relative error due to rounding is used. This value is known as the machine epsilon, and is the largest acceptable difference in calculations (exclusive).

The service's epsilon can be set on instantiation. If omitted, it will default to `0.00001`. Keep in mind, the epsilon value should be proportional to the differences in the values you're comparing. If very small differences matter to your application, use a very small epsilon.

```php
namespace Jstewmc\AlmostEquals;

// defaults to an epsilon of 0.00001
$service = new AlmostEquals();

$service(1/10, 0.1);      // returns true
$service(0.10002, 0.1);   // returns false (0.00002 > 0.00001)
$service(0.100002, 0.1);  // returns true (0.000002 < 0.00001)
``` 

## Integers

To increase ease-of-use, this library supports integer comparison as well. It will use PHP's default type coercion to convert integers to floats before comparison.

That's about it!

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## License

[MIT](https://github.com/jstewmc/almost-equals/blob/master/LICENSE)

## Version

### 0.1.0, March 5, 2017

* Initial release

