<?php 

set_time_limit(0);

$conn = mysqli_connect('localhost', 'root', '', 'aplicacao'); // onde está 'aplicacao' digite o nome da sua base de dados 

if($conn !== FALSE){
  
}else
{
    echo 'falhou a conexão com o banco de dados, favor verificar o nome do banco que está tentando acessar. Para isso, abra o arquivo baixar.php da aplicação no notpad++ , e altere os dados na variavel conn. O ultimo campo é o local onde voce insere o nome da sua base de dados ';
}

 header('Content-Type: text/csv; charset=utf-8');
   header('Content-Disposition: attachment; filename=exportacao.csv');
   
   // create a file pointer connected to the output stream
   $output = fopen('php://output', 'w');
   
   // output the column headings
   fputcsv($output, array("CUSTOMER_ID", "PARTNER_ID", "TICKET_ID", "STORE_ID", "PROMOTION_ID", "POS_ID", "EMPLOYEE_ID", "AMOUNT", "CHANNEL", "COUPON_FLAG", "FAVORITE_STORE", "DATE", "DISCOUNT_AMOUNT", "GROSS_PROFIT_AMOUNT", "POINTS_EARNED_AMOUNT", "ITEMS_QUANTITY", "STATUS", "LAST_UPDATE", "TOTAL_BACK_GROSS_PROFIT_AMOUNT", "AMOUNT_DIFFERENCE"));
   
   // fetch the data



   //$query = "SELECT * from apresentacao where CUSTOMER_ID !=0";
   $query = "SELECT CUSTOMER_ID, PARTNER_ID, TICKET_ID, STORE_ID, PROMOTION_ID, POS_ID, EMPLOYEE_ID, cast(AMOUNT as decimal(50,2)), CHANNEL, COUPON_FLAG, FAVORITE_STORE, DATE, cast(DISCOUNT_AMOUNT as decimal(50,2)), cast(GROSS_PROFIT_AMOUNT as decimal(50,2)), POINTS_EARNED_AMOUNT, cast(ITEMS_QUANTITY as decimal(50,3)),STATUS, LAST_UPDATE, cast(TOTAL_BACK_GROSS_PROFIT_AMOUNT as decimal(50,2)), `AMOUNT_DIFFERENCE` FROM apresentacao";
   $query_result = mysqli_query($conn,$query); 
   while ($row = mysqli_fetch_assoc($query_result)) fputcsv($output, $row);