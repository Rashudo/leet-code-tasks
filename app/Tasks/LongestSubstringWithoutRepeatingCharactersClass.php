<?php

declare(strict_types = 1);

namespace App\Tasks;

/**
 * Given a string s, find the length of the longest
 * substring
 * without repeating characters.
 *
 *
 *
 * Example 1:
 *
 * Input: s = "abcabcbb"
 * Output: 3
 * Explanation: The answer is "abc", with the length of 3.
 * Example 2:
 *
 * Input: s = "bbbbb"
 * Output: 1
 * Explanation: The answer is "b", with the length of 1.
 * Example 3:
 *
 * Input: s = "pwwkew"
 * Output: 3
 * Explanation: The answer is "wke", with the length of 3.
 * Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
 *
 *
 * Constraints:
 *
 * 0 <= s.length <= 5 * 104
 * s consists of English letters, digits, symbols and spaces.
 */
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

            $existsIndex = $i != $strLen
                ? array_search($string[$i], $lettersArray)
                : true;

            // already exists
            if ($existsIndex !== false) {
                if (count($lettersArray) > $count) {
                    $count = count($lettersArray);
                }

                // no need to continue, coz word has ended
                if ($i == $strLen) break;

                // slice word from unique letter
                $lettersArray = array_slice($lettersArray, $existsIndex + 1);
            }
            $lettersArray[] = $string[$i];
        }
        return $count;
    }
}
