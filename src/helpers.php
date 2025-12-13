<?php

if (! function_exists('example_function')) {
    function example_function(): string
    {
        return 'Hello, World!';
    }
}

if (! function_exists('array_until')) {
    function array_until(mixed $stop, array $arr): array
    {
        $index = array_search($stop, $arr);

        if ($index === false) {
            throw new InvalidArgumentException('key does not exists in array');
        }

        return array_slice($arr, 0, $index);
    }
}