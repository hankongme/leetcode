<?php
/**
 *
 * 大家都知道斐波那契数列，现在要求输入一个整数n，请你输出斐波那契数列的第n项。
 * n<=39
 *
*@param $n
 *
 * @return int
 */

function Fibonacci($n)
{

    $f = 0;
    $g = 1;
    while ($n--)
    {
        $g+=$f;
        $f = $g-$f;
    }

    return $f;

}

echo Fibonacci(39);
