<?php

declare(strict_types=1);

namespace App\Tasks;

final readonly class RemoveDuplicatesFromSortedArray2Class
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(array &$nums): int
    {
        $numsLastIndex = count($nums);
        for ($key = 0; $key < $numsLastIndex; $key++) {
            $value = $nums[$key];
            if ($key + 2 >= $numsLastIndex) {
                break;
            }
            for ($j = $key + 2; $j < $numsLastIndex; $j++) {
                if ($nums[$j] != $value) {
                    break;
                }
                unset($nums[$j]);
                $key = $j;
            }
        }

        return count($nums);
    }
}
