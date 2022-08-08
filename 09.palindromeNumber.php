class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
    function isPalindrome($x) {
        $revNum = strrev($x);
        if($x == $revNum)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}