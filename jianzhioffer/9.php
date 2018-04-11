<?php
/**
 *
 * 一只青蛙一次可以跳上1级台阶，也可以跳上2级……它也可以跳上n级。
 * 求该青蛙跳上一个n级的台阶总共有多少种跳法。
 * 除了最后一个台阶,每个台阶都是跳与不跳两种情况所以2^(n-1)
*@param $number
 *
 * @return int
 */
function jumpFloorII($number)
{
    // write code here
    return 1<<($number-1);
}

echo jumpFloorII(4);
