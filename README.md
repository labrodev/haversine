# PHP Haversine Distance Calculator

**Labrodev\Haversine** is a strict PHP 8.1+ utility library that provides a lightweight method to calculate the great-circle distance between two geographic coordinates using the Haversine formula.

## Features

- Calculates accurate distance between two latitude/longitude points
- Returns result in kilometers
- Based on the Haversine formula (spherical Earth model)
- Fully static and type-safe class
- Lightweight, dependency-free implementation
- Includes PHPUnit and PHPStan support for testing and analysis

## Installation

```
composer require labrodev/haversine
```

## Usage

```php
use Labrodev\Haversine\Calculator;

// Distance in kilometers between Paris and Frankfurt
$distance = Calculator::haversineDistance(48.8566, 2.3522, 50.1109, 8.6821);

echo $distance; // e.g., 478.5 
```

## Testing

To run tests:

```
composer install
composer test
```

## Static Analysis

To run static analysis using PHPStan:

```
composer install
composer analyse
```

> Configuration is located in `phpstan.neon.dist`

## Security

If you discover a security vulnerability within this package, **please contact us immediately at [contact@labrodev.com](mailto:contact@labrodev.com)**. All security-related issues will be handled privately and promptly.

## Credits

This package is maintained by **Labrodev** — Laravel & PHP development studio.  
[https://github.com/labrodev](https://github.com/labrodev)

## Feedback

If you have any questions, suggestions, or have found an error — feel free to open an issue or contact us:  
**contact@labrodev.com**

**License:** MIT