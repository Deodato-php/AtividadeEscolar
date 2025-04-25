<?php 
require_once("conn.php")
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Cadastro das notas</title>
</head>
<body>
	<center>
	<div class="div1">

			<a href="index.php" class="links">Voltar</a>
			<br/><br/>

	<form method="POST" action="processaCadProfessor.php">
		<select name="selectAluno">
            <option>Selecione o aluno</option>

            <?php
                $sqlAluno = "SELECT * FROM tbaluno";
                $resultadoAluno = mysqli_query($conn, $sqlAluno);
                while($rowAluno = mysqli_fetch_assoc($resultadoAluno)){
                    ?>
                    <option value="<?php echo $rowAluno['ra']; ?>"><?php echo $rowAluno['nomeAluno']; ?><?php
                }
            ?>
        </select><br><br>
        <select name="selectProfessor">
            <option>Selecione</option>

            <?php
                $sqlProfessor = "SELECT * FROM tbprofessor";
                $resultadoProfessor = mysqli_query($conn, $sqlProfessor);
                while($rowProfessor = mysqli_fetch_assoc($resultadoProfessor)){
                    ?>
                    <option value="<?php echo $rowProfessor['idProfessor']; ?>"><?php echo $rowProfessor['nomeProfessor']; ?><?php
                }
            ?>
        </select><br><br>
        <select name="selectDisciplinas">
            <option>Selecione</option>

            <?php
                $sqldiciplinas = "SELECT * FROM tbdisciplinas";
                $resultadodiciplinas = mysqli_query($conn, $sqldiciplinas);
                while($rowdiciplinas = mysqli_fetch_assoc($resultadodiciplinas)){
                    ?>
                    <option value="<?php echo $rowdiciplinas['idDisciplinas']; ?>"><?php echo $rowdiciplinas['nomeDisciplina']; ?><?php
                }
            ?>
        </select><br><br>




        <h2>Notas:</h2>  <input type="text" name="txtnota" id="txtNotas"><br><br>

         <h2>Faltas:</h2>  <input type="text" name="txtfalta" id="txtFaltas"><br><br>
         <input type="submit" value="Cadastar">
    </form>
	</div>
	</center>
</body>
</html>