<?php
/**
 * 题目描述
 * 在一个二维数组中，每一行都按照从左到右递增的顺序排序，每一列都按照从上到下递增的顺序排序。
 * 请完成一个函数，输入这样的一个二维数组和一个整数，判断数组中是否含有该整数。
 */

/**
 * @param $target
 * @param $array
 *
 * @return bool
 */
function Find($target, $array)
{
    // write code here
    $y_count = count($array);
    $x_count = count($array[0]);
    $x = $x_count - 1;
    $y = 0;
    while ($x>=0&&$y<$y_count)
    {
        if($target == $array[$y][$x])
        {
            return true;
        }

        if($target<$array[$y][$x])
        {
            $x--;
        }else
        {
            $y++;
        }
    }
    return false;
}

