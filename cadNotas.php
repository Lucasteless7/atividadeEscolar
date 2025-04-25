<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Notas</title>
</head>
<body>
	<form method="POST" action="ProcessaCadNotas.php">
      RA do aluno: <input type="text" name="txtRa" id="txtRa"><br><br>
       Professor: <input type="number" name="txtProf" id="txtProf"><br><br>
       Disciplina: <input type="number" name="txtDisc" id="txtDisc"><br><br>
       Nota: <input type="text" name="txtNota" id="txtNota"><br><br>
       Faltas: <input type="number" name="txtFaltas" id="txtFaltas"><br><br>

        <input type="submit" value="Cadastar">
    </form>

</body>
</html>