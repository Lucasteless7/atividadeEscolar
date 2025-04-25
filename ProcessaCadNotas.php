<?php
    require_once("conn.php");
?>

<?php
    $ra = $_POST['selectAluno'];
    $idprof = $_POST['selectProf'];
     $iddisc = $_POST['selectDisc'];
      $nota = $_POST['txtNota'];
       $faltas = $_POST['txtFaltas'];


    $sqlNotas = "INSERT INTO tbnotas(ra,idProfessor,iddisciblina,nota,faltas) VALUES ('$ra','$idprof','$iddisc', '$nota','$faltas')";
    $resultadoNotas = mysqli_query($conn, $sqlNotas);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Nota cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplina.php'>
        <script type=\"text/javascript\">
                alert(\"A Nota não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>