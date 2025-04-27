# GB/T 2659

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

A PHP implementation of GB/T 2659 country and region codes (2-letter).

## Features

- Complete implementation of GB/T 2659 standard
- Supports both Chinese and English country names
- Based on PHP 8.1 enums, type-safe
- Extensible and suitable for forms, data transformation, and more

## Installation

- Requires PHP >= 8.1
- Depends on `tourze/enum-extra`

Install via Composer:

```bash
composer require tourze/gb-t-2659
```

## Quick Start

```php
use Tourze\GBT2659\Alpha2Code;

// Get country code
$code = Alpha2Code::CN; // China
$code = Alpha2Code::US; // United States

// Get country name
echo $code->getLabel(); // Output: China

// Get lowercase code
echo $code->toLowerCase(); // Output: cn
```

## Documentation

- Retrieve all enum entries via `Alpha2Code::cases()`
- `getLabel()` returns the country name
- `toLowerCase()` returns the lowercase code
- Integrate with forms or dropdowns using `toArray()` or `toSelectItem()`

## Contributing

- Please check existing issues and PRs before submitting new ones
- Follow the coding style and provide tests for new features

## License

MIT License

## Changelog

See [CHANGELOG.md] or the Git commit history for details.
