<?php
    require_once("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Notas</title>
</head>
<body>
    <form method="POST" action="ProcessaCadNotas.php">
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


         <form method="POST" action="ProcessaCadNotas.php">
      <select name="selectProf">
            <option>Selecione o professor</option>
            <?php
                $sqlProf = "SELECT * FROM professor";
                $resultadoProf = mysqli_query($conn, $sqlProf);
                while($rowProf = mysqli_fetch_assoc($resultadoProf)){
                    ?>
                    <option value="<?php echo $rowProf['idProfessor']; ?>"><?php echo $rowProf['nomePROFESSOR']; ?><?php
                }
            ?>
        </select><br><br>

         <select name="selectDisc">
            <option>Selecione a disciplina</option>
            <?php
                $sqlDisc = "SELECT * FROM tbdisciplinas";
                $resultadoDisc = mysqli_query($conn, $sqlDisc);
                while($rowDisc = mysqli_fetch_assoc($resultadoDisc)){
                    ?>
                    <option value="<?php echo $rowDisc['iddisciblina']; ?>"><?php echo $rowDisc['nomeDisciplinas']; ?><?php
                }
            ?>
        </select><br><br>

        
       Nota: <input type="text" name="txtNota" id="txtNota"><br><br>
       Faltas: <input type="number" name="txtFaltas" id="txtFaltas"><br><br>

        <input type="submit" value="Cadastar">
    </form>



</body>
</html>