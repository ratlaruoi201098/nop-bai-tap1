<?php
	$a = 1;
	$b = 2;
	$c = 1;
	$z = $b*$b - 4*$a*$c;
	$x1 = (-$b + sqrt($z))/(2*$a);
	$x2 = (-$b - sqrt($z))/(2*$a);
	echo "phuong trinh ax^2 +bx +c = 0 co nghiem la :";
	echo "<br>";

	if ($z < 0 ){
		echo "phuong trinh vo nghiem";
	};
	if ($z == 0 ){
		echo "phuong trinh co 1 nghiem la : $x1";
	};
	if ($z > 0 ){
		echo "phuong trinh co 2 nghiem <br>x1 la : $x1";
		echo "<br>x2 la : $x2";
	};
?>