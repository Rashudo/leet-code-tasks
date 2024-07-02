<?php

declare(strict_types = 1);

namespace App\Tasks;

final class LongestSubstringWithoutRepeatingCharactersClass
{

    /**
     * @param String $string
     * @return Integer
     */
    public function run(string $string): int
    {
        if ($string === '') return 0;

        // result
        $count = 1;

        // array of found letters
        $lettersArray = [];

        // length of initial string
        $strLen = strlen($string);

        for ($i = 0; $i <= $strLen; $i++) {

            $existsIndex = $i == $strLen ? 0 : array_search($string[$i], $lettersArray);
            if ($existsIndex !== false) {
                if (count($lettersArray) > $count) {
                    $count = count($lettersArray);
                }

                if ($i == $strLen) break;

                $lettersArray = array_slice($lettersArray, $existsIndex + 1);
            }
            $lettersArray[] = $string[$i];
        }
        return $count;
    }
}
