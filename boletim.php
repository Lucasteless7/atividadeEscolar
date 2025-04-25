<html>

<body>

	<?php
		require_once("conn.php");
	?>

	<form action="boletim.php" method="post">
		
		<select name="selectAluno">
            <option>Selecione o aluno</option>
            <?php
                $sqlAlunos = "SELECT * FROM tbaluno";
                $resultadoAlunos = mysqli_query($conn, $sqlAlunos);
                while($rowAlunos = mysqli_fetch_assoc($resultadoAlunos)){
                    ?>
                    <option value="<?php echo $rowAlunos['ra']; ?>"><?php echo $rowAlunos['nomeALUNO']; ?><?php
                }
            ?>
        </select><br><br>

		<input type="submit" name="buscar">
		</select>
	</form>

	<?php
		$ra = $_POST['selectAluno'];
		$resultado = mysqli_query($conn, "select tbaluno.nomeALUNO, tbdisciplinas.nomeDisciplinas, professor.nomePROFESSOR,tbnotas.nota, tbnotas.faltas from tbnotas inner join tbaluno on tbaluno.ra = tbnotas.ra inner join professor on professor.idProfessor = tbnotas.idProfessor inner join tbdisciplinas on tbdisciplinas.iddisciblina = tbnotas.iddisciblina where tbnotas.ra='".$ra."'");

		while ($linha = mysqli_fetch_array($resultado)) {
			echo "<br>Aluno: ";
			echo $linha['nomeALUNO'];
			echo "<br>Disciplina: ";
			echo $linha['nomeDisciplinas'];
			echo "<br>Professor: ";
			echo $linha['nomePROFESSOR'];
			echo "<br>Nota: ";
			echo $linha['nota'];
			echo "<br>Faltas: ";
			echo $linha['faltas'];
			echo "<br>";
		}

		
	?>
</body>
</html>