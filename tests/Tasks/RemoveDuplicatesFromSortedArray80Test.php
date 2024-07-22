<?php

declare(strict_types=1);

namespace Tasks;

use App\Tasks\RemoveDuplicatesFromSortedArray2Class;
use PHPUnit\Framework\TestCase;


final class RemoveDuplicatesFromSortedArray80Test extends TestCase
{

    private RemoveDuplicatesFromSortedArray2Class $task;

    public function setUp(): void
    {
        $this->task = new RemoveDuplicatesFromSortedArray2Class();
    }

    public function testRemoveDuplicatesFromSortedArray2(): void
    {
        $nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4, 5, 5, 5];
        $result = $this->task->removeDuplicates($nums);
        $this->assertEquals(
            [0, 0, 1, 1, 2, 2, 3, 3, 4, 5, 5],
            array_values($nums)
        );
        $this->assertEquals(11, $result);
    }


    public function testSecondRemoveDuplicatesFromSortedArray2(): void
    {
        $nums = [1, 1, 1, 2, 2, 2, 3, 3];
        $result = $this->task->removeDuplicates($nums);
        $this->assertEquals(
            [1, 1, 2, 2, 3, 3],
            array_values($nums)
        );
        $this->assertEquals(6, $result);
    }

    public function testThirdRemoveDuplicatesFromSortedArray2(): void
    {
        $nums = [0, 0, 1, 1, 1, 1, 2, 3, 3];
        $result = $this->task->removeDuplicates($nums);
        $this->assertEquals(
            [0, 0, 1, 1, 2, 3, 3],
            array_values($nums)
        );
        $this->assertEquals(7, $result);
    }
}
