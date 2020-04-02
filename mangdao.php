<?php 
  $arr = array(1,4,2,6,9,100,4);
  echo "Mảng Ban Đầu Là :    ";
foreach ($arr as $value ){
	echo $value. " ";
}
  rsort($arr);
  echo "<br> Mảng Đảo Là :    ";
  foreach ($arr as $value ){
	echo $value. " ";
}
 ?>
