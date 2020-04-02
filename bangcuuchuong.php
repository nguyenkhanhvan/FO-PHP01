<?php 
	$i;
	$j;
	echo "Bảng Cửu Chương <br>";
	for($i = 2 ; $i < 10 ; $i++ )
	{
		for($j = 1 ; $j <= 10 ; $j++)
		{
			$kq = $i * $j;
			echo " $i x $j = $kq <br>";
		}
		echo "<br>";
	}
		
 ?>
