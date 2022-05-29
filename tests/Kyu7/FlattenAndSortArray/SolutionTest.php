<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require SRC_DIR . '/Kyu7/FlattenAndSortArray/index.php';

final class SolutionTest extends TestCase
{

    /**
     * @dataProvider data
     */
    public function testFlattensAndSortsArray($array, $expected): void
    {
        $this->assertEquals(
            $expected,
            flatten_and_sort($array)
        );
    }

    public function data(): array
    {
        return [
            [
                [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]],
                [1, 2, 3, 4, 5, 6, 7, 8, 9],
            ],
            [
                [[]],
                [],
            ],
            [
                [[], [], [], [2], [], [1]],
                [1, 2],
            ],
            [
                [[1, 3, 5], [100], [2, 4, 6]],
                [1, 2, 3, 4, 5, 6, 100],
            ],
        ];
    }
}