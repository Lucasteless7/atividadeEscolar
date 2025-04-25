<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta Professor</title>
</head>

<body>

	<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM professor");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$id=$linha['idProfessor'];
        	$nome=$linha['nomePROFESSOR'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Professor: </td><td>$id</td><tr>";
        	echo "<tr><td>Nome do Professor: </td><td>$nome</td><tr> <br><br>";

            
			
        	}


        	
        	?>

</body>
</html>
