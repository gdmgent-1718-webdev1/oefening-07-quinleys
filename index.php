<?php

// fibonacci functie
function fibonacci(){
    $x = 0;    
    $y = 1;
    // max waarde van de fibonacci loop  
    $maxWaarde = 100;   
    // for loop die de fibonacci waarde berekent
    for($i=0;$i<=2000;$i++)    
    {   
        $z = $x + $y; 
        // als de waarde kleiner dan 100 zal deze blijven doorgaan
        if ($z < $maxWaarde) {
        echo $z."<br />";         
        $x=$y;       
        $y=$z; 
    }
        // is de waarde groter dan 100 zal het uit de loop gaan
        else{
            break;
        }    
    }   
}
// de fibonacci functie wordt uitgevoerd
echo fibonacci();