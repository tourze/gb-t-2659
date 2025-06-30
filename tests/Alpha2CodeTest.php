<?php

namespace Tourze\GBT2659\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2659\Alpha2Code;

/**
 * Alpha2Code枚举类的单元测试
 */
class Alpha2CodeTest extends TestCase
{
    /**
     * 测试枚举类中的值是否与预期相符
     */
    public function testEnumValues(): void
    {
        // 测试几个常见国家的代码
        $this->assertSame('CN', Alpha2Code::CN->value);
        $this->assertSame('US', Alpha2Code::US->value);
        $this->assertSame('JP', Alpha2Code::JP->value);
        $this->assertSame('GB', Alpha2Code::GB->value);
    }

    /**
     * 测试getLabel方法是否返回正确的中文名称
     */
    public function testGetLabel(): void
    {
        // 测试几个常见国家的中文名称
        $this->assertSame('中国', Alpha2Code::CN->getLabel());
        $this->assertSame('美国', Alpha2Code::US->getLabel());
        $this->assertSame('日本', Alpha2Code::JP->getLabel());
        $this->assertSame('英国', Alpha2Code::GB->getLabel());

        // 测试一些特殊的地区名称
        $this->assertSame('中国香港', Alpha2Code::HK->getLabel());
        $this->assertSame('中国澳门', Alpha2Code::MO->getLabel());
        $this->assertSame('台湾', Alpha2Code::TW->getLabel());
    }

    /**
     * 测试toLowerCase方法是否正确转换为小写
     */
    public function testToLowerCase(): void
    {
        $this->assertSame('cn', Alpha2Code::CN->toLowerCase());
        $this->assertSame('us', Alpha2Code::US->toLowerCase());
        $this->assertSame('jp', Alpha2Code::JP->toLowerCase());
    }

    /**
     * 测试枚举的cases方法是否返回所有枚举项
     */
    public function testCases(): void
    {
        // 获取所有枚举项
        $cases = Alpha2Code::cases();

        // 验证是否包含所有枚举项
        $this->assertCount(249, $cases); // 实际定义的国家和地区数量
        $this->assertGreaterThan(200, count($cases)); // 世界上有约250个国家和地区

        // 验证具体的枚举项是否存在
        $hasCN = false;
        $hasUS = false;
        $hasJP = false;

        foreach ($cases as $case) {
            if ($case === Alpha2Code::CN) {
                $hasCN = true;
            } elseif ($case === Alpha2Code::US) {
                $hasUS = true;
            } elseif ($case === Alpha2Code::JP) {
                $hasJP = true;
            }
        }

        $this->assertTrue($hasCN, 'CN枚举值应该存在');
        $this->assertTrue($hasUS, 'US枚举值应该存在');
        $this->assertTrue($hasJP, 'JP枚举值应该存在');
    }

    /**
     * 测试枚举是否实现了Selectable接口中的genOptions方法
     */
    public function testGenOptions(): void
    {
        // 获取所有选项
        $options = Alpha2Code::genOptions();

        // 验证选项格式是否正确
        $this->assertNotEmpty($options);
        $this->assertGreaterThan(200, count($options));

        // 验证选项内容
        $cnOption = null;
        $usOption = null;

        foreach ($options as $option) {
            $this->assertArrayHasKey('value', $option);
            $this->assertArrayHasKey('label', $option);

            if ($option['value'] === 'CN') {
                $cnOption = $option;
            } elseif ($option['value'] === 'US') {
                $usOption = $option;
            }
        }

        $this->assertNotNull($cnOption);
        $this->assertNotNull($usOption);
        $this->assertSame('中国', $cnOption['label']);
        $this->assertSame('美国', $usOption['label']);
    }

    /**
     * 测试from方法是否可以正确创建枚举实例
     */
    public function testFromMethod(): void
    {
        $this->assertSame(Alpha2Code::CN, Alpha2Code::from('CN'));
        $this->assertSame(Alpha2Code::US, Alpha2Code::from('US'));
        $this->assertSame(Alpha2Code::JP, Alpha2Code::from('JP'));
    }

    /**
     * 测试传入无效值到from方法时是否抛出异常
     */
    public function testFromMethodWithInvalidValue(): void
    {
        $this->expectException(\ValueError::class);
        Alpha2Code::from('INVALID');
    }

    /**
     * 测试tryFrom方法是否可以正确创建枚举实例或返回null
     */
    public function testTryFromMethod(): void
    {
        $this->assertSame(Alpha2Code::CN, Alpha2Code::tryFrom('CN'));
        $this->assertSame(Alpha2Code::US, Alpha2Code::tryFrom('US'));
        $this->assertNull(Alpha2Code::tryFrom('INVALID'));
    }
}
