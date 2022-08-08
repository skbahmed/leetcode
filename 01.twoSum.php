class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
    function twoSum($nums, $target) {
        $len = count($nums);
        for($i = 0; $i<$len; $i++)
        {
            for($j = $i+1; $j<$len; $j++)
            {
                $value1 = $nums[$i];
                $value2 = $nums[$j];
                
                if($value1 + $value2 == $target)
                {
                    return [$i, $j];
                }
            }
        }
        
    }
}