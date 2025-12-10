<?php

declare(strict_types=1);

namespace Angearsene\LaravelTesting\Tests;

require_once __DIR__ . '/../vendor/autoload.php';

use function example_function;

use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    public function test_example_function(): void
    {
        $this->assertTrue(function_exists('example_function'));
        $this->assertEquals('Hello, World!', example_function());
    }
}