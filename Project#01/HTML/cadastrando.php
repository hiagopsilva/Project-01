<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "bd_basico";
 // Create connection
$con = new mysqli($host, $user, $pass, $banco);

// Check connection
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
} 
$nome= $_REQUEST['nome'];
$email=$_REQUEST['email'];
$senha=$_REQUEST['senha'];
$opcao=$_REQUEST['opcao'];
$comentario=$_REQUEST['comentario'];

$sql = "INSERT INTO usuarios(nome, email,senha, opcao, comentario)VALUES ('".$nome."','".$email."','".$senha."','".$opcao."','".$comentario."')";
if (mysqli_query($con, $sql)) {
    $a = "Cadastro efetuado com Sucesso!!";
    echo '<script>alert();<script>'; 
    //echo "Cadastro efetuado com sucesso!!";
} else {
   echo "Deu ruim.....: " . $sql . "" . mysqli_error($con);
}
//fecha conexao 
$con->close();
    
?>
<html>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../_css/estilo.css" rel="stylesheet">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<head>
    <title>Cadastro realizado</title>
    <meta http-equiv="refresh" content="5;http://localhost/Project%2301/HTML/index.html"></meta>

</head>

<body>
    
    <h1>Essa pagina sera redirecionada para o menu em 5 segundos!!</h1>
</body>
    </html>

