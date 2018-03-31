<?php
/**
 * 题目描述
 * 请实现一个函数，将一个字符串中的空格替换成“%20”。
 * 例如，当字符串为We Are Happy.则经过替换之后的字符串为We%20Are%20Happy。
 *
*@param $str
 *
 * @return string
 */

function replaceSpace($str)
{
    // write code here
    $str_len = strlen($str);
    $str2 = '';
    for ($i=0;$i<$str_len;$i++)
    {
        if($str[$i] == ' ')
        {
            $str2.='%20';
        }else{
            $str2.=$str[$i];
        }
    }
    return $str2;
}

