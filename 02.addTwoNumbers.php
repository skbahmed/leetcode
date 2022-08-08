class Solution {

/**
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
    function addTwoNumbers($l1, $l2) {
        $num1 = implode('', $l1);
            $revNum1 = strrev($num1);
        $num2 = implode('', $l2);
            $revNum2 = strrev($num2);
        
        $sum = $num1 + $num2;
            $revSum = strrev($sum);
        
        return str_split($revSum);
    }
}