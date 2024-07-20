<?php

declare(strict_types=1);

namespace App\Tasks;

final class RemoveDuplicatesFromSortedArrayClass
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(array &$nums): int
    {
        $result = 0;

        $memo = [];

        foreach ($nums as $num) {
            if (!in_array($num, $memo)) {
                $memo[] = $num;
                ++$result;
            }
        }

        $nums = $memo;

        return $result;
    }
}
