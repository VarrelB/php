<?php 


	require 'functions.php';

	$students = query("SELECT * FROM users");

	if (isset($_POST["search"])) {
		$players = search($_POST["keyword"]);
	}

 ?>

 <html>
 	<head>
 		<title>Dashboard</title>
 		<link rel="stylesheet" href="css/style-dashboard.css">
 	</head>
 	<body>
 		<h1 class="title">Dashboard</h1>

 		<div class="berita">
 			<div class="berita-baru">
 			</div>
 			<br><br>
 			<div class="berita-lama">
 				<table border="1px" cellpadding="10" cellspacing="0">
 					<tr>
 						<td bgcolor="#D6D8DC" align="center">Id</td>
 						<td bgcolor="#D6D8DC" align="center">Username</td>
 						<td bgcolor="#D6D8DC" align="center">Password</td>
 						<td bgcolor="#D6D8DC" align="center">Level</td>
 						<td bgcolor="#D6D8DC" align="center">Fullname</td>
 					</tr>
 					<?php foreach($students as $student) : ?>
			 			<tr>
			 				<td><?= $student["id"] ?></td>
			 				<td><?= $student["username"] ?></td>
			 				<td><?= $student["password"] ?></td>
			 				<td><?= $student["level"] ?></td>
			 				<td><?= $student["fullname"] ?></td>
			 			</tr>
			 		<?php endforeach; ?>
 				</table>
 			</div>
 			<div></div>
 		</div>
 	</body>	
 </html>