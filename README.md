# Amount

[![Latest Version on Packagist](https://img.shields.io/packagist/v/oe2i/amount.svg?style=flat-square)](https://packagist.org/packages/oe2i/amount)
[![GitHub Tests Action Status](https://github.com/oe2i/amount/actions/workflows/verify.yml/badge.svg)](https://github.com/oe2i/amount/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/oe2i/amount.svg?style=flat-square)](https://packagist.org/packages/oe2i/amount)

A premium Laravel package for converting numeric amounts into words, perfectly formatted as currency. Built for accuracy, speed, and ease of use.

## Features

- **PHP 8.4+ & Laravel 12.0+** ready.
- **Zero-Config**: Install and use immediately.
- **Short Alias**: Access via the unique `AmountX` facade.
- **Type Safe**: Fully typed and Larastan verified.

## Requirements

To use this package, you must have:

- **PHP**: 8.4 or higher
- **Laravel**: 12.0 or higher
- **PHP Extension**: `intl` (required for numeric formatting)

## Installation

You can install the package via composer:

```bash
composer require oe2i/amount
```

The package will automatically register its service provider and the `AmountX` alias.

## Usage

### Basic Conversion
Convert any number to its word representation:

```php
use AmountX;

// Output: "One hundred USD in words"
echo AmountX::toWords(100);

// Output: "Two thousand five hundred EUR in words"
echo AmountX::toWords(2500, 'EUR');
```

### Integration Options

While `AmountX` is the recommended way to use the package, you have full flexibility in how you integrate it into your Laravel application:

#### 1. Using the Facade (Global Alias)
The quickest way to get started. No imports required.
```php
$words = AmountX::toWords(100);
```

#### 2. Explicit Class Import
Recommended for better IDE completion and code clarity.
```php
use Oe2i\Amount\Facades\Amount;

$words = Amount::toWords(100);
```

#### 3. Type-Hinting/Dependency Injection
Best for testable code and following SOLID principles.
```php
use Oe2i\Amount\Amount;

public function __construct(protected Amount $amount) {}

public function show()
{
    return $this->amount->toWords(100);
}
```

#### 4. Real-Time Facades
```php
use Facades\Oe2i\Amount\Amount;

$words = Amount::toWords(100);
```

## Testing

The package uses [Pest](https://pestphp.com/). To run the test suite, along with static analysis and code formatting, use our built-in verification script:

```bash
composer verify
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Support

If you encounter any issues or have questions, please [open an issue](https://github.com/oe2i/amount/issues) on GitHub or contact us via email at [support@oe2i.com](mailto:support@oe2i.com).

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [OE2i Inc.](https://oe2i.com)
- [AO](https://oe2i.com/ao)
- [Official Package Portal](https://oe2i.org/packages)

## License

Copyright © 2026 OE2i Inc.

The Apache License 2.0. Please see [License File](LICENSE.md) for more information.
