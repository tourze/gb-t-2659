# GB/T 2659

[English](README.md) | [中文](README.zh-CN.md)

[![最新版本](https://img.shields.io/packagist/v/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![下载量](https://img.shields.io/packagist/dt/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![PHP 版本要求](https://img.shields.io/packagist/php-v/tourze/gb-t-2659.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-2659)
[![构建状态](https://img.shields.io/github/actions/workflow/status/tourze-contrib/php-monorepo/tests.yml?branch=master&style=flat-square)](https://github.com/tourze-contrib/php-monorepo/actions)
[![代码覆盖率](https://img.shields.io/codecov/c/github/tourze-contrib/php-monorepo.svg?style=flat-square)](https://codecov.io/gh/tourze-contrib/php-monorepo)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

GB/T 2659 世界各国和地区名称代码（2字母）的 PHP 实现。

## 功能特性

- 完整实现 GB/T 2659 标准
- 支持中英文国家名称
- 基于 PHP 8.1 枚举，类型安全
- 可扩展，适用于表单、数据转换等多种场景

## 安装说明

- 需要 PHP >= 8.1
- 依赖 `tourze/enum-extra`

使用 Composer 安装：

```bash
composer require tourze/gb-t-2659
```

## 快速开始

```php
use Tourze\GBT2659\Alpha2Code;

// 获取国家代码
$code = Alpha2Code::CN; // 中国
$code = Alpha2Code::US; // 美国

// 获取国家名称
echo $code->getLabel(); // 输出：中国

// 获取小写代码
echo $code->toLowerCase(); // 输出：cn
```

## 详细文档

- 支持通过 `Alpha2Code::cases()` 获取所有国家/地区枚举项
- `getLabel()` 获取中文名称
- `toLowerCase()` 获取小写字母代码
- 可通过 `toArray()`、`toSelectItem()` 便捷集成表单或下拉选项

## 贡献指南

- 提交 Issue 或 PR 前请先查阅现有内容
- 保持代码风格一致，补全必要的测试

## 版权和许可

MIT License

## 更新日志

详见 [CHANGELOG.md] 或 Git 仓库提交历史。
