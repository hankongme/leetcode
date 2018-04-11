<?php
/**
 *
 * 最好是O(lgn)
 * 把一个数组最开始的若干个元素搬到数组的末尾，我们称之为数组的旋转。
 * 输入一个非递减排序的数组的一个旋转，输出旋转数组的最小元素。
 * 例如数组{3,4,5,1,2}为{1,2,3,4,5}的一个旋转，该数组的最小值为1。
 * NOTE：给出的所有元素都大于0，若数组大小为0，请返回0。
 *
*@param $rotateArray
 *
 * @return int
 */
function minNumberInRotateArray($rotateArray)
{
    // write code here
    $count = count($rotateArray);
    if($count == 0)
    {
        return 0;
    }

    if($count == 1)
    {
        return $rotateArray[0];
    }

    $left = 0;
    $right = $count - 1;
    $middle = $right/2;

    while ($left<$right)
        {
            if(($right-$left) <= 1)
            {
                return $rotateArray[$right]>$rotateArray[$left]?$rotateArray[$left]:$rotateArray[$right];
            }
            if($rotateArray[$middle]>$rotateArray[$left])
            {
                $left = $middle;
                $middle = ($left+$right)/2;
            }elseif ($rotateArray[$middle]<$rotateArray[$left])
            {
                $right = $middle;
                $middle = ($left+$right)/2;
            }else{
                if($rotateArray[$middle]>$rotateArray[$right])
                {
                    $left = $middle;
                    $middle = ($left+$right)/2;
                }elseif ($rotateArray[$middle]<$rotateArray[$right])
                {
                    $right = $middle;
                    $middle = ($left+$right)/2;
                }else{
                    $left++;
                    $right--;
                }
            }

        }
}

