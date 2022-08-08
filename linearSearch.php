<?php
$values = readline("Enter values, separate values with space : ");
    $array = explode(" ", $values);
$target = (int)readline("which value you want to search? ");

$len = count($array);
$matched = false;

for($i = 0; $i<$len; $i++)
{
	if($array[$i]==$target)
    {
        echo "index num is ".$i;
        $matched = true;
        break;
    }
}
if(!$matched)
{
	echo "value not found";
}
?>