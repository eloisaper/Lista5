<?php

    include('conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    echo "<h1>Alteração de dados </h1>";
    echo "<p> Usuário: $nome </p>";

    $sql = "UPDATE agenda SET 
        nome = '$nome',
        apelido = '$apelido',
        endereco = '$endereco',
        bairro = '$bairro',
        cidade = '$cidade',
        estado = '$estado',
        telefone = '$telefone',
        celular = '$celular',
        email = '$email'
        WHERE id_agenda = $id_agenda";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso! <br>";

    else 
        echo "Erro ao alterar dados: ".mysqli_error($con)."!";

?>
<a href="index.php">Voltar</a>