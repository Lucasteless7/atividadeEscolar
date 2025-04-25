<?php
    require_once("conn.php");
    $disciplina = $_POST['txtDisciplina'];
    $carga = $_POST['txtHora'];

    $sqlDisciplina = "INSERT INTO tbdisciplina(nomeDisciplinas) VALUES ('$disciplina','$carga');
    $resultadoDisciplina = mysqli_query($conn, $sqlProfessor);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Disciplina cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplina.php'>
        <script type=\"text/javascript\">
                alert(\"A DIsciplina não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>