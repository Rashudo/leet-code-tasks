<?php

namespace Tasks;

use App\Tasks\LongestSubstringWithoutRepeatingCharactersClass;
use PHPUnit\Framework\TestCase;

/**
 * docker compose exec app php artisan test --filter=MergeSortedArray88Test
 */
class LongestSubstringWithoutRepeatingCharacters3Test extends TestCase
{
    /**
     * @var LongestSubstringWithoutRepeatingCharactersClass $task
     */
    private LongestSubstringWithoutRepeatingCharactersClass $task;

    public function setUp(): void
    {
        $this->task = new LongestSubstringWithoutRepeatingCharactersClass();
    }

    public function testLengthOfLongestSubstringFirst()
    {
        $string = 'abcabcbb';
        $result = $this->task->run($string);
        $this->assertEquals(3, $result);
    }


    public function testLengthOfLongestSubstringSecond()
    {
        $string = 'bbbbb';
        $result = $this->task->run($string);
        $this->assertEquals(1, $result);
    }

    public function testLengthOfLongestSubstringThird()
    {
        $string = 'pwwkew';
        $result = $this->task->run($string);
        $this->assertEquals(3, $result);
    }

    public function testLengthOfLongestSubstringFourth()
    {
        $string = 'abc';
        $result = $this->task->run($string);
        $this->assertEquals(3, $result);
    }

    public function testLengthOfLongestSubstringFifth()
    {
        $string = 'dvdf';
        $result = $this->task->run($string);
        $this->assertEquals(3, $result);
    }

}
