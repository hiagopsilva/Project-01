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
    $buscar=$_POST['buscar'];
$sqlb = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%".$buscar."%');
$row = mysql_num_rows($sqlb);
if($row > 0){
    while($linha = mysql_fetch_array($sqlb)){
        $nome = $linha['nome'];
        $email = $linha['email'];
        $senha = $linha['senha'];
        $opcao = $linha['opcao'];
        $comentario = $linha['comentario'];
        echo "<strong>id:</strong>".@$id;
        echo "<br/> <br/>"
        echo "<strong>nome:</strong>".@$nome;
        echo "<br/> <br/>"
        echo "<strong>email:</strong>".@$email;
        echo "<br/> <br/>"
        echo "<strong>senha:</strong>".@$senha;
        echo "<br/> <br/>"
        echo "<strong>opcao:</strong>".@$opcao;
        echo "<br/> <br/>"
        echo "<strong>comentario:</strong>".@$comentario;
    }
}else{
    echo "Desculpe nenhum registo usuario com esse nome foi encontrado!!";
}
?>

<html>

<head>
    <title> Resultado da busca... </title>
</head>

<body>


</body>

</html>-->
?>


