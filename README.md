# GB/T 2659

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![PHP Version](https://img.shields.io/packagist/php-v/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![Build Status](https://img.shields.io/github/actions/workflow/status/tourze-contrib/php-monorepo/tests.yml?branch=master&style=flat-square)](https://github.com/tourze-contrib/php-monorepo/actions)
[![Coverage Status](https://img.shields.io/codecov/c/github/tourze-contrib/php-monorepo.svg?style=flat-square)](https://codecov.io/gh/tourze-contrib/php-monorepo)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

A PHP implementation of GB/T 2659 country and region codes (2-letter) based on PHP 8.1 enums.

## Features

- **Complete GB/T 2659 implementation**: All 249 countries and regions included
- **Type-safe enums**: Built on PHP 8.1 backed enums for maximum type safety
- **Bilingual support**: Chinese labels with English documentation
- **Form integration**: Ready-to-use with dropdown lists and form components
- **Extensible**: Implements `Labelable`, `Itemable`, and `Selectable` interfaces
- **Utility methods**: Lowercase conversion, array transformation, and more

## Installation

**Requirements:**
- PHP >= 8.1
- `tourze/enum-extra` package

Install via Composer:

```bash
composer require tourze/gb-t-2659
```

## Quick Start

```php
<?php

use Tourze\GBT2659\Alpha2Code;

// Basic usage
$china = Alpha2Code::CN;
echo $china->value;        // Output: CN
echo $china->getLabel();   // Output: 中国
echo $china->toLowerCase(); // Output: cn

// Create from string
$usa = Alpha2Code::from('US');
echo $usa->getLabel();     // Output: 美国

// Safe creation with tryFrom
$code = Alpha2Code::tryFrom('UK');
if ($code === null) {
    echo "Invalid code";
}

// Get all countries
$allCountries = Alpha2Code::cases();
echo count($allCountries); // Output: 249
```

## Advanced Usage

### Form Integration

```php
// Generate options for dropdown
$options = Alpha2Code::genOptions();
// Returns: [['value' => 'CN', 'label' => '中国'], ...]

// Convert to array
$array = Alpha2Code::CN->toArray();
// Returns: ['value' => 'CN', 'label' => '中国']

// Convert to select item
$item = Alpha2Code::CN->toSelectItem();
// Returns: ['value' => 'CN', 'label' => '中国', 'text' => '中国', 'name' => '中国']
```

### Country Filtering

```php
// Filter Asian countries
$asianCountries = [
    Alpha2Code::CN, Alpha2Code::JP, Alpha2Code::KR,
    Alpha2Code::IN, Alpha2Code::SG, Alpha2Code::TH
];

$userCountry = Alpha2Code::from('JP');
if (in_array($userCountry, $asianCountries)) {
    echo "User is from Asia";
}
```

## API Reference

### Methods

- `Alpha2Code::cases()` - Get all enum cases
- `Alpha2Code::from(string $value)` - Create enum from string (throws on invalid)
- `Alpha2Code::tryFrom(string $value)` - Create enum from string (returns null on invalid)
- `getLabel()` - Get Chinese country name
- `toLowerCase()` - Get lowercase country code
- `toArray()` - Convert to array with value and label
- `toSelectItem()` - Convert to select item format
- `genOptions()` - Generate all options for forms

### Properties

- `value` - The 2-letter country code
- `name` - The enum case name (same as value)

## Testing

Run tests with PHPUnit:

```bash
./vendor/bin/phpunit packages/gb-t-2659/tests
```

## Contributing

1. Check existing issues and PRs before submitting new ones
2. Follow PSR-12 coding standards
3. Add tests for new features
4. Update documentation when needed

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Changelog

See Git commit history for detailed changelog information.
