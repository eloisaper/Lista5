<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = "SELECT * FROM agenda WHERE id_agenda = $id_agenda";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

</head>
<body>
    <h1>Cadastro</h1>
    <form action="altera.agenda_exe.php" method="post">  
          <fieldset>

        <input name="id_agenda" type="hidden" value="<?php echo $row ['id_agenda']?>">

        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required
            value="<?php echo $row ['nome']?>">
        </div>
        <div>
            <label for="apelido">Apelido: </label>
            <input type="text" name="apelido" id="apelido" placeholder="Digite seu apelido" required
            value="<?php echo $row ['apelido']?>">
        </div>
        <div>
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" required
            value="<?php echo $row ['endereco']?>">
        </div>
        <div>
            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="bairro" placeholder="Digite seu endereço" required
            value="<?php echo $row ['bairro']?>">
        </div>
        <div>
            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade" required
            value="<?php echo $row ['cidade']?>">
        </div>
        <div>
            <label for="estado">Estado: </label>
            <input type="text" name="estado" id="estado" placeholder="Informe seu estado" required
            value="<?php echo $row ['estado']?>">
        </div>
        <div>
            <label for="telefone">Telefone: </label>
            <input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone"  pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
                value="<?php echo $row ['telefone']?>">
        </div>
        <div>
            <label for="celular">Celular: </label>
            <input type="tel" name="celular" id="celular" placeholder="Digite seu celular"  pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
                value="<?php echo $row ['celular']?>">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required
            value="<?php echo $row ['email']?>">

        </div>
    <input type="submit" value="Salvar">
</fieldset>

    </form>
    
</body>
</html>