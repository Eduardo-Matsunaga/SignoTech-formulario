<?php
include "conexao.php";
$id = $_GET['id'] ?? '';

// Executa a consulta de exclusão
$sql = "DELETE FROM usuarios WHERE cod=$id";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir o registro: " . mysqli_error($conn);
}



?>
<a href="index.html">Início</a>
<a href="pesquisa.php">Pesquisar</a>
