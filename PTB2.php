
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Phương Trình Bậc 2:</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 	<?php 
 			$a = 0;
 			$b=0;
 			$c=0;
 			if(isset($_POST["nhapa"]))
 			{
 				$a = $_POST["nhapa"];
 			}
 			if(isset($_POST["nhapb"]))
 			{
 				$b = $_POST["nhapb"];
 			}

			if(isset($_POST["nhapc"]))
 			{
 				$c = $_POST["nhapc"];
 			}
 			$nghiem = 0;
 			if($a==0)
              {
                  if($b==0)
                  {
                       if($c==0)
                        {
                          echo $nghiem = "Phương Trình Vô Số Nghiệm";
                        }
                        else 
                            echo $nghiem = "Phương Trình Vô Nghiệm";
                  }
                   else
                    {
                        $nghiem =  -$c / $b;
                        echo "x = ".$nghiem;
                    }
              }
               
             else
             {
            $delta = (pow($b, 2) -4 * $a * $c) ;
            if($delta<0)
            {
               echo $nghiem = "Phương Trình Vô Nghiệm";

           }
            else if($delta==0)
            {
                $nghiem = -$b / (2 * $a);
                echo "x = ".$nghiem;
            }
            else
            {
                $x1=  (-$b + sqrt($delta))/(2 * $a) ;
               	$x2 = (-$b -  sqrt($delta))/(2 * $a) ;
                $nghiem = "x1 = ".$x1. "  "." x2 = ".$x2; 
            }
             }	
		?>
 <body>
 		
 	<form action="PTB2.php" method="POST">
 		<table>
 			<tr>
 				<td colspan="2"><h3>Phương Trình Bậc 2 Có Dạng: Ax^2 + Bx + c = 0</h3></td>
 			</tr>
 			<tr>
 				<td>Nhập Số Thứ Nhất</td>
 				<td><input type="text" name="nhapa" value="<?php echo $a; ?>"></td>
 			</tr>
 			<tr>
 				<td>Nhập Số Thứ Hai</td>
 				<td><input type="text" name="nhapb" value="<?php echo $b; ?>"></td>
 			</tr>
 			<tr>
 				<td>Nhập Số Thứ Ba</td>
 				<td><input type="text" name="nhapc"  value="<?php echo $c; ?>"></td>
 			</tr>
 			<tr>
 				<td>Kết Quả</td>
 				<td><input type="text" name="nghiem"  value="<?php echo $nghiem; ?>" readonly></td>
 			</tr>
 			<tr>
 				<td colspan="2"><input type="submit" name="kq" value="Xem Kết Quả"></td>
 			</tr>
 		</table>
 		<div>
 		</div>
 	</form>
 </body>
 </html>
