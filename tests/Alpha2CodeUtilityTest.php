<?php

namespace Tourze\GBT2659\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2659\Alpha2Code;

/**
 * 测试 Alpha2Code 的实用功能场景
 */
class Alpha2CodeUtilityTest extends TestCase
{
    /**
     * 测试遍历所有枚举是否都有对应的标签(中文名称)
     */
    public function testAllEntriesHaveLabels(): void
    {
        foreach (Alpha2Code::cases() as $case) {
            $label = $case->getLabel();
            $this->assertNotEmpty($label, sprintf('枚举 %s 应该有对应的标签', $case->name));
            $this->assertIsString($label);
        }
    }

    /**
     * 测试toLowerCase方法在所有枚举上的表现
     */
    public function testToLowerCaseForAllEntries(): void
    {
        foreach (Alpha2Code::cases() as $case) {
            $lowerValue = $case->toLowerCase();
            $this->assertSame(strtolower($case->value), $lowerValue);
        }
    }

    /**
     * 测试从字符串获取枚举实例的场景
     */
    public function testGetEnumFromStringScenarios(): void
    {
        // 测试大小写匹配
        $this->assertSame(Alpha2Code::CN, Alpha2Code::from('CN'));

        // 测试大小写不匹配（应该失败）
        try {
            Alpha2Code::from('cn');
            $this->fail('应该抛出异常，因为枚举值是大写的，但输入是小写的');
        } catch (\ValueError $e) {
            // 预期的异常
            $this->assertTrue(true);
        }

        // 测试tryFrom对大小写不匹配的处理
        $this->assertNull(Alpha2Code::tryFrom('cn'), '小写的国家代码应该无法匹配');

        // 测试tryFrom对有效值的处理
        $this->assertSame(Alpha2Code::US, Alpha2Code::tryFrom('US'));
    }

    /**
     * 测试特定国家代码的判断
     */
    public function testCountryCodeChecking(): void
    {
        // 检查是否中国
        $isChina = Alpha2Code::CN === Alpha2Code::from('CN');
        $this->assertTrue($isChina);

        // 判断是否特定区域
        $asianCountries = [
            Alpha2Code::CN,
            Alpha2Code::JP,
            Alpha2Code::KR,
            Alpha2Code::IN,
            Alpha2Code::SG,
        ];

        $isAsian = in_array(Alpha2Code::JP, $asianCountries);
        $this->assertTrue($isAsian, 'JP应属于亚洲国家');

        $isAsian = in_array(Alpha2Code::US, $asianCountries);
        $this->assertFalse($isAsian, 'US不应属于亚洲国家');
    }

    /**
     * 测试通过value属性获取枚举值的场景
     */
    public function testAccessingEnumProperties(): void
    {
        $code = Alpha2Code::CN;
        $this->assertSame('CN', $code->value);
        $this->assertSame('CN', $code->name);
    }

    /**
     * 测试不同代码间的比较
     */
    public function testComparingEnums(): void
    {
        $this->assertNotSame(Alpha2Code::CN, Alpha2Code::US);
        $this->assertNotEquals(Alpha2Code::CN, Alpha2Code::US);

        // 验证相同的枚举实例是等价的
        $code1 = Alpha2Code::CN;
        $code2 = Alpha2Code::CN;
        $this->assertSame($code1, $code2);
    }
}
