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
		<style type="text/css">
			body {
					margin: 0 auto;
				}
			table {
					margin-left: 520px;
				}
		    table h3 {
					text-align: center;
				}
			table tr td {
				background-color: #3c7883;
				color: #efdcbc;
				width: 200px;
				line-height: 20px;
			}
			input[type = "text"] {
				font-size: 15px;
				text-align: center;
			}
			input[type = "submit"] {
				font-size: 15px;
				text-align: center;
				width: 160px;
				background-color:  #efdcbc;
				color: #3c7883;
				margin-left: 200px;
			}
		</style>
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
