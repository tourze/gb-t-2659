# GB/T 2659

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

GB/T 2659 世界各国和地区名称代码（2字母）的 PHP 实现。

GB/T 2659 implementation for country and region codes (2-letter) in PHP.

## 安装 / Installation

```bash
composer require tourze/gb-t-2659
```

## 要求 / Requirements

- PHP >= 8.1
- tourze/enum-extra

## 使用 / Usage

```php
use Tourze\GBT2659\Alpha2Code;

// 获取国家代码 / Get country code
$code = Alpha2Code::CN; // 中国 / China
$code = Alpha2Code::US; // 美国 / United States

// 获取国家名称 / Get country name
echo $code->getLabel(); // 输出: 中国 / Output: China

// 获取小写代码 / Get lowercase code
echo $code->toLowerCase(); // 输出: cn / Output: cn
```

## 特性 / Features

- 完整的 GB/T 2659 标准实现 / Complete GB/T 2659 standard implementation
- 支持中英文国家名称 / Support for Chinese and English country names
- 基于 PHP 8.1 枚举 / Based on PHP 8.1 enums
- 类型安全 / Type-safe

## 许可证 / License

MIT License
