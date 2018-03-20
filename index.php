<?php

	require_once('db_connect.php');
	
	if(!empty($_POST)) {
		if (!empty($_POST["item"])) {
			$item = $_POST["item"];

			$pdo = db_connect();

			try{
				$sql = "insert into todo (item) values (:item)";
				$stmt = $pdo -> prepare($sql);
				$stmt -> bindValue(':item' , $item);
				$stmt -> execute();
			} catch (PDOException $e) {
				echo 'ERROR : ' . $e -> getMessage();
				die();
			}
		} // End if(!empty($_POST["item]))
		
					
			try {
				$sql2 = "select * from todo order by namber desc";
				$stmt1 = $pdo -> query($sql2);
			} catch (PDOException $e) {
				echo 'Error desu yoyo' , $e -> errorMessage();
				die();
			}

			function delete() {
				$sql2 = "delete from todo where ";
			}

	}  // End if(!empty($_POST))


?>


<!DOCTYPE html>
<html>
<head>
    <!-- Content Type Meta tag -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--Responsive Viewport Meta tag-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Todo list app</title>
		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="resources/css/reset.min.css">
		<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	</head>
<body>

		<form method="POST" action="">

			<input type="text" placeholder="？？？" name="item">

			<button id="add" name="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg>
			</button>

		</form>

		<div class="container">

			<ul class="todo" id="todo">
					<?php
						foreach ($stmt1 as $row) {
							echo '<li>';
							echo $row['namber'];
							echo $row['item'];
							echo '</li>';
							// echo $row['TorF'];
						}

					?>
			</ul>

		</div>

</body>
</html>
