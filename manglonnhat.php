<?php   
	$array = [
    1,4,2,6,9,100,45,8,20
];
$max = null;
for ($i = 0; $i < count($array); $i++)
{
        if ($array[$i] > $max){
            $max = $array[$i];
    }
}
 
echo "Giá trị lớn nhất là $max";

?>
 	
 
