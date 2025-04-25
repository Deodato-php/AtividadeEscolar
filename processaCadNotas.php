<?php
    require_once("conn.php");
    $ra = $_POST['selectAluno'];
 $idprof = $_POST['selectProfessor'];
    $iddisc = $_POST['selectDisciplina'];
    $nota = $_POST['txtnota'];
    $faltas = $_POST['txtfalta'];

    $sqlNotas = "INSERT INTO tbnotas(ra,idProfessor,idDiciplinas,nota,faltas) VALUES ('$ra','$idprof','$iddisc','$nota','$faltas')";
    $resultadoNotas = mysqli_query($conn, $sqlNotas);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Nota  cadastrada com Sucesso! \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadNotas.php'>
        <script type=\"text/javascript\">
                alert(\"Nota não cadastrada. \");
        </script>
        ";
    }
?>