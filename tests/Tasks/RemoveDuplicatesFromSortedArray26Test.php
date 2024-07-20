<?php

declare(strict_types=1);

namespace Tasks;

use App\Tasks\RemoveDuplicatesFromSortedArrayClass;
use PHPUnit\Framework\TestCase;


final class RemoveDuplicatesFromSortedArray26Test extends TestCase
{

    private RemoveDuplicatesFromSortedArrayClass $task;

    public function setUp(): void
    {
        $this->task = new RemoveDuplicatesFromSortedArrayClass();
    }

    public function testRemoveDuplicatesFromSortedArray(): void
    {
        $nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
        $result = $this->task->removeDuplicates($nums);
        $this->assertEquals(
            [0, 1, 2, 3, 4],
            $nums
        );
        $this->assertEquals(5, $result);
    }
}
