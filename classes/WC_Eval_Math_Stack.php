<?php


/**
 * Class WC_Eval_Math_Stack.
 */
class WC_Eval_Math_Stack
{
    /**
     * Stack array.
     *
     * @var array
     */
    public $stack = array();
    /**
     * Stack counter.
     *
     * @var integer
     */
    public $count = 0;
    /**
     * Push value into stack.
     *
     * @param  mixed $val
     */
    public function push($val)
    {
    }
    /**
     * Pop value from stack.
     *
     * @return mixed
     */
    public function pop()
    {
    }
    /**
     * Get last value from stack.
     *
     * @param  int $n
     *
     * @return mixed
     */
    public function last($n = 1)
    {
    }
}