<?php

namespace Tasks;

use App\Tasks\RemoveElementClass;
use PHPUnit\Framework\TestCase;


class RemoveElement27Test extends TestCase
{
    private RemoveElementClass $task;

    public function setUp(): void
    {
        $this->task = new RemoveElementClass();
    }

    public function test27RemovesElement()
    {
        $nums = [0, 1, 2, 2, 3, 0, 4, 2];
        $val = 2;
        $result = $this->task->simpleOne($nums, $val);
        $this->assertEquals(5, $result);
        $this->assertEquals(
            [0, 1, 3, 0, 4],
            $nums
        );
    }

    public function test27RemovesElement2()
    {
        $nums = [0, 1, 2, 2, 3, 4, 5];
        $val = 2;
        $result = $this->task->goodOne($nums, $val);
        $this->assertEquals(5, $result);
        $this->assertEquals(
            [0, 1, 5, 4, 3, 2, 2],
            $nums
        );
    }

    public function test27RemovesElement3()
    {
        $nums = [3, 2, 2, 3];
        $val = 2;
        $result = $this->task->goodOne($nums, $val);
        $this->assertEquals(2, $result);
        $this->assertEquals(
            [3, 3, 2, 2],
            $nums
        );
    }

}
