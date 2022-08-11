<?php

function publicBusFare($totalP, $ticketFare)
{
    $busCap = 50;
    $microCap = 11;

    if($totalP >= $busCap)
    {
        for($i = 1; $busCap*$i <= $totalP; $i++)
        {
            $totalBusCap = $busCap * $i;
        }
        $totalP -= $totalBusCap;
    }
    if($totalP>= $microCap)
    {
        for($j = 1; $microCap*$j <= $totalP; $j++)
        {
            $totalMicroCap = $microCap * $j;
        }
        $totalP -= $totalMicroCap;
    }
    
    echo "Total public bus ticket fare : " . $totalP*$ticketFare . " taka";
}
    
$x = (integer) readline("Total person : ");
$y = (integer) readline("Public bus ticket fare : ");

publicBusFare($x, $y);

?>