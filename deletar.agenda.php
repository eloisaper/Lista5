<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "DELETE FROM agenda where id_agenda = $id_agenda";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: ". mysqli_error($con)."!";
?>