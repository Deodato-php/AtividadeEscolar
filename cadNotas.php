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

	<form method="POST" action="processaCadNotas.php">
        <h2>
        	Ra do aluno:   <input type="text" name="txtra" id="txtRa"><br>
        </h2>
     
        <h2>Professor:</h2>  <input type="text" name="txtprof" id="txtProf"><br><br>
      
       
         <h2>
        	Diciplina:   <input type="text" name="txtDisc" id="txtDisciplina"><br>
        </h2>
     
        <h2>Notas:</h2>  <input type="text" name="txtnota" id="txtNotas"><br><br>

         <h2>Faltas:</h2>  <input type="text" name="txtfalta" id="txtFaltas"><br><br>
      
         <input type="submit" value="Cadastar">
    </form>
	</div>
	</center>
</body>
</html>