<!DOCTYPE HTML>
<html>
<head>
	<meta charset="iso-8859-1">
	<meta name="description" content="Web prueba">
	<meta name="keywords" content="HTML5, CSS3, JavaScript, php">
	<link href="cssweb.css" rel="stylesheet" type="text/css">
</head>
<body>

	<section>

		<?php
			require_once "connect.php";
			$id_artista = $_GET['id_artis'];
		?>
		
		<?php
			$conn = connect_sql();
			$result = select_pls_art_sql($conn, $id_artista); //el id lo pasamos por link (se podria hacer diferente)
			
			// Imprimir los resultados en HTML
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<figure>";
						echo "<figcaption>";
							echo "<h3>".$row["name"]."</h3>";
						echo "</figcaption>";
						echo "<img src=img/".$row["img"]." alt=".$row["name"]." width=200 height=200></a>";
						echo "<figcaption>";
							echo $row["description"];
						echo "</figcaption>";
					echo "</figure>";
				}
			}
			close_sql($conn);
		?>
	
	</section>

</body>
</html>