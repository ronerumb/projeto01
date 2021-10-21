<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Processar o CSV</h1>    
    </header>

    <form method="POST" action="insert.php" enctype="multipart/form-data">
    <label>Selecione o CSV</label>
    <input type="file" name="arquivo">
    <input type="submit" value="Enviar">
	</form>
    <br>

    <form method="POST" action="app.php" enctype="multipart/form-data">
    <label>Clique em "Processar" para o arquivo ser processado e gerar o CSV. </label>
		<br>
    <input type="submit" value="Processar">    
    </form>
    <br>
    <form method="POST" action="calcular.php" enctype="multipart/form-data">
    <label>Clique em "Conferir" para conferir a soma de todos os valores tratados </label>   
    <input type="submit" value="Conferir">    
    </form>
    <br>
	<form method="POST" action="baixar.php" enctype="multipart/form-data">
    <label>Clique em "Baixar" para baixar o csv</label>   
    <input type="submit" value="Baixar">    
    </form>
    <br>
    <br>
    <form method="POST" action="deletar.php" enctype="multipart/form-data">
    <label>Clique em "Deletar" para apagar a tabela todos_dados e começar um novo tratamento </label>   
    <input type="submit" value="Deletar">    
    </form>


</body>
</html>