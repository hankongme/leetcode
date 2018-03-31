<?php

class Solution
{
    static $stack1;
    static $stack2;

}

Solution::$stack1 = new SplStack();
Solution::$stack2 = new SplStack();

/**
 * 用两个栈来实现一个队列，完成队列的Push和Pop操作。
 * 队列中的元素为int类型
 *
*@param $node
 */
function mypush($node)
{
    // write code here
    Solution::$stack1->push($node);

}

function mypop()
{
    // write code here
    if(Solution::$stack2->isEmpty())
    {
        while (!Solution::$stack1->isEmpty())
        {
            Solution::$stack2->push(Solution::$stack1->pop());
        }
    }

    return Solution::$stack2->pop();
}
