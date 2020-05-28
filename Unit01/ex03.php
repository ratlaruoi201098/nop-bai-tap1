<?php
	$arr_name =array(1,4,2,6,9,100,45,8,20);
	$solonnhat = 0;
	echo "mang co nhung phan tu la : ";
	for ($i =0; $i < 9 ;$i++ ) {
		
		echo "$arr_name[$i] ";

		
		if ($solonnhat < $arr_name[$i]) {
			$solonnhat = $arr_name[$i];
		}
		
	}
	echo "<br></br>";
	echo " so lon nhat trong mang la : $solonnhat ";
?>
