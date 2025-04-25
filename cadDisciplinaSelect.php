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

	<form method="POST" action="processaCaddidciplinas.php">
		<select name="selectdidciplinas">
            <option>Selecione</option>

            <?php
                $sqldiciplinas = "SELECT * FROM tbdiciplinas";
                $resultadodiciplinas = mysqli_query($conn, $sqldiciplinas);
                while($rowdiciplinas = mysqli_fetch_assoc($resultadodiciplinas)){
                    ?>
                    <option value="<?php echo $rowdiciplinas['iddiciplinas']; ?>"><?php echo $rowdiciplinas['nomediciplinas']; ?><?php
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