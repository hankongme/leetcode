<?php

class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}
function printListFromTailToHead($head)
{
    // write code here
    $list = $head;
    $stack = new SplStack();
    while ($list->next)
    {
        $list->next = $list;
    }

    while (!$stack->isEmpty())
    {
        $stack->pop();
    }

    return 0;
}
