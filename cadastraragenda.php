<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    //feito acima

    echo "<h1>Dados do usuário</h1>";
    echo "Nome: $nome <br>";
    echo "Apelido: $apelido <br>";
    echo "Endereço: $endereco <br>";
    echo "Bairro: $bairro <br>";
    echo "Cidade: $cidade <br>";
    echo "Estado: $estado <br>";
    echo "Telefone: $telefone <br>";
    echo "Celular: $celular <br>";
    echo "E-mail: $email <br>";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email)";

    $sql .= "VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."')";
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados cadastrados com sucesso!";
    else    
        echo "Erro ao tentar cadastrar!";
?>
<a href="index.php">Voltar</a>