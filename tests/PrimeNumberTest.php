<?php
/**
 * Unit-test for PrimeNumber.php
 *
 * PHP Version 7
 *
 * @category UnitTests
 * @package  Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App\Tests;

use App\PrimeNumber;
use PHPUnit\Framework\TestCase;

/**
 * PrimeNumberTest tests the PrimeNumber class
 *
 * @category UnitTests
 * @package  App\Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class PrimeNumberTest extends TestCase
{
    /**
     * Set up data needed for every unit-test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function setUp(): void
    {
        $this->harness = new PrimeNumber();
    }

    /**
     * Tests if unit-test can be run
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testCanary(): void
    {
        // arrange & act & assert
        $this->assertTrue($this->harness instanceof PrimeNumber);
    }

    /**
     * Tests prime numbers
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testGetNthPrimeSuccess1(): void
    {
        // arrange
        $expected = 5;
        // act
        $actual = $this->harness->getNthPrime(3);
        // assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * Tests prime numbers
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testGetNthPrimeSuccess2(): void
    {
        // arrange
        $expected = 7927;
        // act
        $actual = $this->harness->getNthPrime(1001);
        // assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * Tests prime numbers
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     *
     * @expectedException InvalidArgumentException
     */
    public function testGetNthPrimeFail(): void
    {
        // act
        $actual = $this->harness->getNthPrime(-1);
    }

    /**
     * Tests prime numbers
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsPrimeSuccess(): void
    {
        // act
        $actual = $this->harness->isPrime(3);
        // assert
        $this->assertTrue($actual);
    }

    /**
     * Tests prime numbers
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testIsPrimeFail(): void
    {
        // act
        $actual = $this->harness->isPrime(4);
        // assert
        $this->assertFalse($actual);
    }
}
