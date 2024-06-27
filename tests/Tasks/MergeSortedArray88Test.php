<?php

namespace tests\Tasks;

use App\Tasks\MergeSortedArrayClass;
use PHPUnit\Framework\TestCase;

class MergeSortedArray88Test extends TestCase
{
    public function test88MergeSortedArray()
    {
        // Data
        $nums1 = [4, 5, 6, 0, 0, 0];
        $nums1Copy = $nums1;
        $m = 3;
        $nums2 = [1, 2, 3];
        $n = 3;

        // Decision Class
        $task = new MergeSortedArrayClass();

        $task->goodOne($nums1, $m, $nums2, $n);
        $task->merge($nums1Copy, $m, $nums2, $n);

        $this->assertEquals(
            $nums1,
            $nums1Copy
        );
    }


}
