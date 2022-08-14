class Solution {

    /**
    * @param String[] $strs
    * @return String
    */
    function longestCommonPrefix($strs) {
        
        sort($strs);
        $strCount = count($strs);

        $prefix = "";

        $strF = $strs[0];
        $strL = $strs[$strCount - 1];

        for($i=0; $i<strlen($strF); $i++)
        {
            if($strF[$i] == $strL[$i])
            {
                $prefix .= $strF[$i];
            }
            else
            {
                break;
            }
        }


        return $prefix;
    }
}