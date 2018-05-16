<?php
/**
 * PrimeNumber.php
 *
 * PHP Version 7
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App;

/**
 * PrimeNumber contains prime number methods
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class PrimeNumber
{
    /**
     * Array of primes
     *
     * @var array $primes
     */
    private $_primes;

    /**
     * Initializes the object
     *
     * @param number $input Nth number to be found
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   string
     */
    public function __construct($input = 0)
    {
        // TODO Implement method
    }

    /**
     * ToString returns a string representation of the class
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   string
     */
    public function __toString(): string
    {
         return '/App/PrimeNumber';
    }

    /**
     * GetNthPrime find the Nth prime number from the beginning
     *
     * @param number $n Nth number to be found
     *
     * @return int
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     */
    public function getNthPrime($n): int
    {
        // TODO Implement method
    }

    /**
     * IsPrime returns TRUE if number is prime otherwise FALSE
     *
     * @param number $num Number to be evaluated
     *
     * @return bool
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     */
    public function isPrime($num): bool
    {
        // TODO Implement method
    }
}
