<?php

declare(strict_types=1);

namespace Tourze\GBT2659\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT2659\Alpha2Code;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * 测试 Alpha2Code 的实用功能场景
 *
 * @internal
 */
#[CoversClass(Alpha2Code::class)]
final class Alpha2CodeUtilityTest extends AbstractEnumTestCase
{
    /**
     * 测试遍历所有枚举是否都有对应的标签(中文名称)
     */
    public function testAllEntriesHaveLabels(): void
    {
        foreach (Alpha2Code::cases() as $case) {
            $label = $case->getLabel();
            $this->assertNotEmpty($label, sprintf('枚举 %s 应该有对应的标签', $case->name));
            $this->assertGreaterThan(0, strlen($label), sprintf('枚举 %s 应该有非空标签', $case->name));
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
     * 测试从有效字符串获取枚举实例
     */
    public function testFromValidString(): void
    {
        $this->assertSame(Alpha2Code::CN, Alpha2Code::from('CN'));
    }

    /**
     * 测试从无效字符串获取枚举实例应抛出异常
     */
    public function testFromInvalidStringThrowsException(): void
    {
        $this->expectException(\ValueError::class);
        Alpha2Code::from('cn');
    }

    /**
     * 测试tryFrom对无效输入的处理
     */
    public function testTryFromInvalidString(): void
    {
        $this->assertNull(Alpha2Code::tryFrom('cn'), '小写的国家代码应该无法匹配');
    }

    /**
     * 测试tryFrom对有效输入的处理
     */
    public function testTryFromValidString(): void
    {
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

        $isAsian = in_array(Alpha2Code::JP, $asianCountries, true);
        $this->assertTrue($isAsian, 'JP应属于亚洲国家');

        // 验证美国不在亚洲国家列表中
        $this->assertNotContains(Alpha2Code::US, $asianCountries, 'US不应属于亚洲国家');
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
        $this->assertNotEquals(Alpha2Code::CN, Alpha2Code::US);

        // 验证相同的枚举实例是等价的
        $code1 = Alpha2Code::CN;
        $code2 = Alpha2Code::CN;
        $this->assertSame($code1, $code2);
    }

    /**
     * 测试 toArray 方法的实用场景
     */
    public function testToArray(): void
    {
        // 测试多个国家的 toArray 返回结果
        $countries = [Alpha2Code::CN, Alpha2Code::US, Alpha2Code::JP, Alpha2Code::GB];

        foreach ($countries as $country) {
            $array = $country->toArray();

            $this->assertIsArray($array);
            $this->assertNotEmpty($array);
            $this->assertArrayHasKey('value', $array);
            $this->assertArrayHasKey('label', $array);

            $this->assertSame($country->value, $array['value']);
            $this->assertSame($country->getLabel(), $array['label']);
        }
    }

    /**
     * 测试 toSelectItem 方法的实用场景
     */
    public function testToSelectItemUtilityScenarios(): void
    {
        // 测试批量生成选项项数据的场景
        $countries = [Alpha2Code::CN, Alpha2Code::US, Alpha2Code::JP, Alpha2Code::GB];
        $selectItems = [];

        foreach ($countries as $country) {
            $selectItems[] = $country->toSelectItem();
        }

        $this->assertCount(4, $selectItems);

        // 验证每个选项的结构
        foreach ($selectItems as $item) {
            $this->assertIsArray($item);
            $this->assertArrayHasKey('value', $item);
            $this->assertArrayHasKey('label', $item);
            $this->assertIsString($item['value']);
            $this->assertIsString($item['label']);
            $this->assertNotEmpty($item['value']);
            $this->assertNotEmpty($item['label']);
        }

        // 验证具体内容
        $this->assertSame('CN', $selectItems[0]['value']);
        $this->assertSame('中国', $selectItems[0]['label']);
        $this->assertSame('US', $selectItems[1]['value']);
        $this->assertSame('美国', $selectItems[1]['label']);

        // 测试用于表单选项的使用场景
        $formOptions = array_column($selectItems, 'label', 'value');
        $this->assertArrayHasKey('CN', $formOptions);
        $this->assertSame('中国', $formOptions['CN']);
        $this->assertArrayHasKey('US', $formOptions);
        $this->assertSame('美国', $formOptions['US']);
    }
}
