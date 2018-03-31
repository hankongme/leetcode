<?php

class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}

/**
 * 输入某二叉树的前序遍历和中序遍历的结果，请重建出该二叉树。
 * 假设输入的前序遍历和中序遍历的结果中都不含重复的数字。
 * 例如输入前序遍历序列{1,2,4,7,3,5,6,8}和中序遍历序列{4,7,2,1,5,3,8,6}，则重建二叉树并返回。
 *
*@param $pre
 * @param $vin
 *
 * @return null|\TreeNode
 */
function reConstructBinaryTree($pre, $vin)
{
    // write code here
    return getBinaryTree($pre,0,count($pre)-1,$vin,0,count($vin)-1);

}

function getBinaryTree($pre,$start=0,$end,$vin,$v_start=0,$v_end)
{
    if($start>$end||$v_start>$v_end)
    {
        return NULL;
    }

    $root = new TreeNode($pre[$start]);

    for ($i=$v_start;$i<=$v_end;$i++)
    {
        if($vin[$i] == $pre[$start])
        {
            $root->left = getBinaryTree($pre,$start+1,$start+$i-$v_start,$vin,$v_start,$i-1);
            $root->right = getBinaryTree($pre,$i-$v_start+$start+1,$end,$vin,$i+1,$v_end);
            break;
        }
    }

    return $root;
}

var_dump(reConstructBinaryTree([1,2,4,7,3,5,6,8],[4,7,2,1,5,3,8,6]));
