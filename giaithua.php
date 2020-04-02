<?php 
 	$n = $_POST["n"];
 	$j = 1;
 	$s=0;

 	for ($i=1; $i <= $n ; $i++) { 
 		$j *= $i;
 		$s += $i/$j;

 	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>tinh </title>
 	<style type="text/css">
 		body {
 			margin: 0 auto;
 			text-align: center;
 		}
 		.mau {
 			background-color: #3c7883;
 			color: #efdcbc;
 			margin-left: 570px;
 			width: 400px;
 		}
 		#doi
 		{
 			margin-left: -60px;
 		}
 		td input[type = "text"]
 		{
 			margin-left: -20px;
 			margin-top: 20px;
 			margin-bottom: 10px;
 			width: 250px;
 			font-style: 20pt;
 		}

 	</style>
 </head>
 <body>
 		<h1>Tính  S = 1/1! + 2/2! + ... n/n!</h1>
 		<table class="mau">
 			<form action="giaithua.php" method="POST">
 			<tr>
 				<td>
 					<input type="text" name="n" placeholder="Nhập N" value="<?php echo $n; ?>"> 
 				</td>
 			</tr>
 			<tr>
 					<td>
 						<input type="text" name="" placeholder="Kết Quả" value="<?php  echo round($s,3); ?>" readonly>
 					</td>
 				</tr>
 			<tr>
 					<td>
 						<input type="submit" name="" value="Xem Kết Quả" id="doi">
 					</td>
 			</tr>
 			</form>
 			
 		</table>
 </body>
 </html>