<?php

set_time_limit(0);

$conn = mysqli_connect('localhost', 'root', '', 'aplicacao'); 

if($conn !== FALSE){
    ECHO        "CONEXAO OK";
}else
{
    echo 'falhou a conexão com o banco de dados, favor verificar o nome do banco que está tentando acessar. Para isso, abra o arquivo deletar.php da aplicação no notpad++ , e altere os dados na variavel conn. O ultimo campo é o local onde voce insere o nome da sua base de dados ';
}

$sql = "DELETE FROM apresentacao";  //tabelas
    
  if ($conn->query($sql) === TRUE) {
  
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }

   
  $sql = "DELETE FROM table_name";  //tabelas
    
  if ($conn->query($sql) === TRUE) {
  
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   echo "Deu certo o delete";
   
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    
<br>
<br>
<br>
<br>


    <form method="POST" action="index.php" enctype="multipart/form-data">  

    <label>Dados excluidos com sucesso</label>
		
    <input type="submit" value="Voltar">    
    </form>	
	
</body>
</html>