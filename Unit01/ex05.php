<?php
	

	$s = 0;
	$n = 3;
	$m = 0;
	$giaithua = 1;
	
    for($i = 1; $i <= $n; $i ++) {
        $giaithua *= $i;

        $m = $m + $i  / $giaithua;
    }
        
    
	echo "tong can tim la : $m";
?>