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
		?>
		
		<?php
			$conn = connect_sql();
			$result = select_arts_sql($conn);
			
			// Imprimir los resultados en HTML
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<figure>";
						echo "<figcaption>";
							echo "<h3>".$row["name"]."</h3>";
						echo "</figcaption>";
						echo "<a href=pls.php?id_artis=".$row["id"]." target=pagweb><img src=img/".$row["img"]." alt=".$row["name"]." width=200 height=200></a>";
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
