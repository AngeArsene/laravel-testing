<?php

declare(strict_types=1);

namespace AngeArsene\LaravelTesting\Tests\Unit;

use function array_until;
use function example_function;

final class FunctionsTest extends \PHPUnit\Framework\TestCase
{
    public function test_example_function_returns_hello_world(): void
    {
        $this->assertTrue(function_exists('example_function'));
        $this->assertEquals('Hello, World!', example_function());
    }

    public function test_array_until_function_fetches_items_in_array_until_key(): void
    {
        $names = ['nken', 'mandeng', 'ange', 'arsene'];

        $this->assertTrue(function_exists('array_until'));
        $this->assertEquals(array_until('ange', $names), ['nken', 'mandeng']);
    }

    public function test_array_until_function_throws_exception_if_key_does_not_exists(): void
    {
        $names = ['nyeck', 'mandeng', 'hubert', 'stephan'];

        $this->assertTrue(function_exists('array_until'));

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('key does not exists in array');

        array_until('ange', $names);
    }
}