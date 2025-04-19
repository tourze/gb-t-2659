<?php

namespace Tourze\GBT2659\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT2659\Alpha2Code;

/**
 * 测试 Alpha2Code 中的 trait 功能
 */
class Alpha2CodeTraitTest extends TestCase
{
    /**
     * 测试 ItemTrait 中的 toSelectItem 方法
     */
    public function testToSelectItem(): void
    {
        $item = Alpha2Code::CN->toSelectItem();

        $this->assertIsArray($item);
        $this->assertArrayHasKey('label', $item);
        $this->assertArrayHasKey('text', $item);
        $this->assertArrayHasKey('value', $item);
        $this->assertArrayHasKey('name', $item);

        $this->assertSame('中国', $item['label']);
        $this->assertSame('中国', $item['text']);
        $this->assertSame('CN', $item['value']);
        $this->assertSame('中国', $item['name']);
    }

    /**
     * 测试 ItemTrait 中的 toArray 方法
     */
    public function testToArray(): void
    {
        $array = Alpha2Code::CN->toArray();

        $this->assertIsArray($array);
        $this->assertArrayHasKey('value', $array);
        $this->assertArrayHasKey('label', $array);

        $this->assertSame('CN', $array['value']);
        $this->assertSame('中国', $array['label']);
    }

    /**
     * 测试 SelectTrait 中的 genOptions 方法是否受环境变量影响
     */
    public function testGenOptionsWithEnvConfig(): void
    {
        // 保存原始环境变量
        $originalEnv = $_ENV;

        try {
            // 禁用某个选项
            $_ENV['enum-display:' . Alpha2Code::class . '-CN'] = false;

            $options = Alpha2Code::genOptions();

            // 检查所有选项中不包含 CN
            $foundCN = false;
            foreach ($options as $option) {
                if ($option['value'] === 'CN') {
                    $foundCN = true;
                    break;
                }
            }

            $this->assertFalse($foundCN, 'CN选项应该被环境变量禁用');

            // 恢复选项并确认它出现
            $_ENV['enum-display:' . Alpha2Code::class . '-CN'] = true;

            $options = Alpha2Code::genOptions();

            $foundCN = false;
            foreach ($options as $option) {
                if ($option['value'] === 'CN') {
                    $foundCN = true;
                    break;
                }
            }

            $this->assertTrue($foundCN, 'CN选项应该被环境变量启用');
        } finally {
            // 恢复环境变量
            $_ENV = $originalEnv;
        }
    }

    /**
     * 测试 toSelectItem 和 toArray 的结果是否一致
     */
    public function testConsistencyBetweenToSelectItemAndToArray(): void
    {
        $sample = [Alpha2Code::CN, Alpha2Code::US, Alpha2Code::JP, Alpha2Code::GB];

        foreach ($sample as $enum) {
            $selectItem = $enum->toSelectItem();
            $array = $enum->toArray();

            // toArray 应该是 toSelectItem 的子集
            $this->assertSame($selectItem['value'], $array['value']);
            $this->assertSame($selectItem['label'], $array['label']);
        }
    }
}
