<?php
/**
 *
 * 一只青蛙一次可以跳上1级台阶，也可以跳上2级。
 * 求该青蛙跳上一个n级的台阶总共有多少种跳法。
 * 备注:实际上可以转换为斐波那契数列,比如第6个台阶可以从4或者5开始跳
 * 即f(6) = f(5)-f(4)
 * @param $number
 *
 * @return int
 */
function jumpFloor($number)
{
    // write code here
    if($number == 0)
    {
        return 0;
    }

    $f1 = 1;
    $f2 = 1;
    while ($number--)
    {
        $f2+=$f1;
        $f1 = $f2-$f1;
    }

    return $f1;
}

echo jumpFloor(4);
