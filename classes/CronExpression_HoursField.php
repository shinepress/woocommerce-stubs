<?php


/**
 * Hours field.  Allows: * , / -
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
class CronExpression_HoursField extends \CronExpression_AbstractField
{
    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy(\DateTime $date, $value)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function increment(\DateTime $date, $invert = \false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value)
    {
    }
}