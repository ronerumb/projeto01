<?php
//verifica a conexao com o banco
set_time_limit(0);
ini_set('display_errors', 0 );
error_reporting(0);

$conn = mysqli_connect('localhost', 'root', '', 'aplicacao'); // onde está 'aplicacao' digite o nome da sua base de dados 
$tabela ="table_name"; // digite aqui o nome da tabela que estão os dados 


if($conn !== FALSE){
  
}else
{
    echo 'falhou a conexão com o banco de dados, favor verificar o nome do banco que está tentando acessar. Para isso, abra o arquivo app.php da aplicação no notpad++ , e altere os dados na variavel conn. O ultimo campo é o local onde voce insere o nome da sua base de dados ';
}



//inicio da inserção das somas

$query = "SELECT CUSTOMER_ID,TICKET_ID, SUM(replace(AMOUNT, ',', '.')) as AMOUNTtotal, SUM(replace(DISCOUNT_AMOUNT, ',', '.')) as DISCOUNT_AMOUNTtotal, SUM(replace(GROSS_PROFIT_AMOUNT, ',', '.')) as GROSS_PROFIT_AMOUNTtotal, SUM(replace(BACK_GROSS_PROFIT_AMOUNT, ',', '.')) as BACK_GROSS_PROFIT_AMOUNTtotal , SUM(replace(QUANTITY, ',', '.'))as quantidade,GROUP_CONCAT(DISTINCT PROMOTION_ID) as concate,DATE,STORE_ID, EMPLOYEE_ID from $tabela GROUP by TICKET_ID";
$query_result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($query_result)){

  $soma1 = $row['AMOUNTtotal']; // amount total
  $soma2 = $row['DISCOUNT_AMOUNTtotal']; // desconto total
  $soma3 =$row['GROSS_PROFIT_AMOUNTtotal'];
  $soma4 = $row['BACK_GROSS_PROFIT_AMOUNTtotal'];
  $tktid = $row['TICKET_ID']; // TKT ID
  $custid = $row['CUSTOMER_ID'];
  $quanti = $row['quantidade'];
  $datax=$row['DATE'];
  $stor=$row['STORE_ID'];
  $emplo=$row['EMPLOYEE_ID'];
  $promotioncontac=$row['concate'];   
  $str= $promotioncontac;
  $str = str_replace(",,",",",$str);   
    if ($str[0] == ",")    
  {      
      $str = preg_replace('/,/', '', $str, 1);
      
  }   
  $str = rtrim($str,',');
  $promotioncontac = $str; 
  
  if ($custid == '0')
  {
	  $sql = "INSERT INTO apresentacao (TICKET_ID,AMOUNT,DISCOUNT_AMOUNT,GROSS_PROFIT_AMOUNT,TOTAL_BACK_GROSS_PROFIT_AMOUNT,ITEMS_QUANTITY,PROMOTION_ID,DATE,STORE_ID, EMPLOYEE_ID,CHANNEL)  VALUES ('$tktid','$soma1','$soma2','$soma3','$soma4','$quanti','$promotioncontac','$datax','$stor','$emplo','PDV')";  //tabelas
    
  if ($conn->query($sql) === TRUE) {
  
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
  
}
if ($custid != '0'){
	 $sql = "INSERT INTO apresentacao (CUSTOMER_ID,TICKET_ID,AMOUNT,DISCOUNT_AMOUNT,GROSS_PROFIT_AMOUNT,TOTAL_BACK_GROSS_PROFIT_AMOUNT,ITEMS_QUANTITY,PROMOTION_ID,DATE,STORE_ID, EMPLOYEE_ID,CHANNEL)  VALUES ('$custid','$tktid','$soma1','$soma2','$soma3','$soma4','$quanti','$promotioncontac','$datax','$stor','$emplo','PDV')";  //tabelas
    
  if ($conn->query($sql) === TRUE) {
  
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
}


	
	 
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
    <label>O processo foi terminado !!!!!!</label>
		
    <input type="submit" value="Voltar">    
    </form>	
	
</body>
</html>


 



  





  



  










