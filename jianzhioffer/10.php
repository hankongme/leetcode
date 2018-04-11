<?php

function rectCover($number)
{
    // write code here
    if($number==0||$number == 1)
    {
        return 1;
    }


    $result_1 = 1;
    $result_2 = 1;

    while ($number --)
    {
        $result_2+=$result_1;
        $result_1 = $result_2-$result_1;
    }

    return $result_1;
}

echo rectCover(4);
