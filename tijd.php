  
<?php

// input
$input = explode (" " , $argv[1]);

// berekeningen
foreach($input as $key) {
    
    $laatstekarakter = substr($key , -1);
    
    switch ($laatstekarakter) {
        
            case "d":
            $dagsec = (int)$key * 60 * 60 * 24;
            break;
        
            case "u":
            $uursec = (int)$key * 60 * 60;
            break;
        
            case "m":
            $minsec = (int)$key * 60;
            break;
        
            case "s":
            $Seconden = (int)$key;
            break;
    }
}
// output berekenen
$output = $dagsec + $uursec + $minsec + $Seconden;

// output
echo $output . " Seconden";