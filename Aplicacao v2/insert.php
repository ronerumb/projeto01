<?php

set_time_limit(0);

$conn = mysqli_connect('localhost', 'root', '', 'aplicacao');
if($conn !== FALSE){
  
}else
{
    echo 'falhou';
}

$arquivo = addslashes ($_FILES ['arquivo']['tmp_name']);




$sql =  "LOAD DATA LOCAL INFILE '$arquivo'
INTO TABLE table_name
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '\"' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES"; 



  
    
  if ($conn->query($sql) === TRUE) {
	echo "Deu certo!! A tabela foi preenchida com os dados!!!";
  }




  else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
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
		
    <input type="submit" value="Voltar">    
    </form>	
	
</body>
</html>