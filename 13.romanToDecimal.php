
class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function romanToInt($s) {
        $I = 1; $V = 5; $X = 10; $L = 50; $C = 100; $D = 500; $M = 1000;
        $len = strlen($s);
        $result = 0;
        for($i = 0; $i<$len-1; $i++){
            $char1 = $s[$i];
                $value1 = $$char1;
            $char2 = $s[$i+1];
                $value2 = $$char2;
            
            if($value1 < $value2){
                $result -= $value1;
            }
            else{
                $result += $value1;
            }
        }
        $lastChar = $s[$len -1];
        $result += $$lastChar;

        return $result;
    }
}

