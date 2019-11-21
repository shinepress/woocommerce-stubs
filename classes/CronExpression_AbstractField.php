<?php


/**
 * Abstract CRON expression field
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
abstract class CronExpression_AbstractField implements \CronExpression_FieldInterface
{
    /**
     * Check to see if a field is satisfied by a value
     *
     * @param string $dateValue Date value to check
     * @param string $value     Value to test
     *
     * @return bool
     */
    public function isSatisfied($dateValue, $value)
    {
    }
    /**
     * Check if a value is a range
     *
     * @param string $value Value to test
     *
     * @return bool
     */
    public function isRange($value)
    {
    }
    /**
     * Check if a value is an increments of ranges
     *
     * @param string $value Value to test
     *
     * @return bool
     */
    public function isIncrementsOfRanges($value)
    {
    }
    /**
     * Test if a value is within a range
     *
     * @param string $dateValue Set date value
     * @param string $value     Value to test
     *
     * @return bool
     */
    public function isInRange($dateValue, $value)
    {
    }
    /**
     * Test if a value is within an increments of ranges (offset[-to]/step size)
     *
     * @param string $dateValue Set date value
     * @param string $value     Value to test
     *
     * @return bool
     */
    public function isInIncrementsOfRanges($dateValue, $value)
    {
    }
}