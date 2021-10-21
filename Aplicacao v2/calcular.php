<?php 

set_time_limit(0);
$tabela = "table_name"; // digite aqui o nome da tabela

$conn = mysqli_connect('localhost', 'root', '', 'aplicacao'); // onde está 'aplicacao' digite o nome da sua base de dados 

if($conn !== FALSE){
    ECHO        "CONEXAO OK";
}else
{
    echo 'falhou a conexão com o banco de dados, favor verificar o nome do banco que está tentando acessar. Para isso, abra o arquivo baixar.php da aplicação no notpad++ , e altere os dados na variavel conn. O ultimo campo é o local onde voce insere o nome da sua base de dados ';
}

echo "<br>";

echo "Esse são os resultados da tabela Apresentação, onde estão todos os dados tratados";
echo "<br>";
$sql = "SELECT SUM(cast(AMOUNT as decimal(50,2))) as AMOUNTtotal,SUM(cast(DISCOUNT_AMOUNT as decimal(50,2))) as DISCOUNT_AMOUNT_TOTAL, SUM(cast(GROSS_PROFIT_AMOUNT as decimal(50,2))) AS GROSS_PROFIT_AMONT_TOTAL,SUM(cast(ITEMS_QUANTITY as decimal(50,3))) AS ITEMS_QUANTITY_TOTAL,SUM(cast(TOTAL_BACK_GROSS_PROFIT_AMOUNT as decimal(50,2))) AS TOTAL_BACK_GROSS_PROFIT_AMOUNTTOTAL FROM apresentacao";

$query_result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($query_result)){

    ECHO "<br>RESULTADO DO AMOUNT TOTAL ".$row['AMOUNTtotal']." <br>";
    ECHO "<br>RESULTADO DO DISCOUNT_AMOUNT_TOTAL ".$row['DISCOUNT_AMOUNT_TOTAL']." <br>";
    ECHO "<br>RESULTADO DO GROSS_PROFIT_AMONT_TOTAL ".$row['GROSS_PROFIT_AMONT_TOTAL']." <br>";
    ECHO "<br>RESULTADO DO ITEMS_QUANTITY_TOTAL ".$row['ITEMS_QUANTITY_TOTAL']." <br>";
    ECHO "<br>RESULTADO DO TOTAL_BACK_GROSS_PROFIT_AMOUNTTOTAL ".$row['TOTAL_BACK_GROSS_PROFIT_AMOUNTTOTAL']." <br>"; 
    


    echo "<br>";
}

echo "Esse são os resultados da tabela que estão todos os dados";
echo "<br>";

$sql = "SELECT sum(cast(replace(replace(AMOUNT, ',', '.'), ',', '.') as decimal(50,2))) as AMOUNTtotal , sum(cast(replace(replace(DISCOUNT_AMOUNT, ',', '.'), ',', '.') as decimal(50,2))) as DISCOUNT_AMOUNT_TOTAL , sum(cast(replace(replace(GROSS_PROFIT_AMOUNT, ',', '.'), ',', '.') as decimal(50,2))) as GROSS_PROFIT_AMONT_TOTAL ,sum(cast(replace(replace(QUANTITY, ',', '.'), ',', '.') as decimal(50,3))) as ITEMS_QUANTITY_TOTAL , sum(cast(replace(replace(BACK_GROSS_PROFIT_AMOUNT, ',', '.'), ',', '.') as decimal(50,2))) as TOTAL_BACK_GROSS_PROFIT_AMOUNTTOTAL FROM table_name";


$query_result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($query_result)){

    ECHO "<br>RESULTADO DO AMOUNT TOTAL ".$row['AMOUNTtotal']." <br>";
    ECHO "<br>RESULTADO DO DISCOUNT_AMOUNT_TOTAL ".$row['DISCOUNT_AMOUNT_TOTAL']." <br>";
    ECHO "<br>RESULTADO DO GROSS_PROFIT_AMONT_TOTAL ".$row['GROSS_PROFIT_AMONT_TOTAL']." <br>";
    ECHO "<br>RESULTADO DO ITEMS_QUANTITY_TOTAL ".$row['ITEMS_QUANTITY_TOTAL']." <br>";
    ECHO "<br>RESULTADO DO TOTAL_BACK_GROSS_PROFIT_AMOUNTTOTAL ".$row['TOTAL_BACK_GROSS_PROFIT_AMOUNTTOTAL']." <br>"; 
    


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