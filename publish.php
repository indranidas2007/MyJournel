<?php
require_once('connection.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		
		<title>My Journel</title>
		<link href="css/all.min.css" rel="stylesheet"> 
	<link href="css/fontawesome.min.css" rel="stylesheet"> 

	<link rel="stylesheet" href="css/stylepublish.css">
		<style>
		body{width:80%;margin:auto;font-family:arial;}
		#container{margin-top:100px;}
		#container h1{text-align:center;}
		#option #textbox{width:82%;float:left;}
		#option #button{width:16%;float:right;}
		#row_data{width:91%;}
		#row_data td{border:1px solid #ddd;padding:8px;}
		#row_data tr:nth-child(even){background-color:#f2f2f2;}
		.clear{clear:both;}
		.error{color: red;font-size: 14px}
		</style>
		<div class="container">
	<button class="btn" onclick="location.href='dashboard.html' ">
	BACK<i class="fas fa-backward"></i></button>
</div>
	</head>
	<body>
		<div id="container">
			<h1>Published Journel</h1>
			
				<?php
				$sql="select * from editor order by id desc";
				$res=mysqli_query($connection,$sql);
				$count=mysqli_num_rows($res);
				if($count>0){
				?>
				<table id="row_data">
					<?php
					while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
							<td width="92%"><?php echo $row['content']?></td>
							
						</tr>
						<?php
					}
					?>
				</table>
				<?php }else { 
					echo "No data found";
				} ?>				
			</div>
		</div>
	</body>
</html>