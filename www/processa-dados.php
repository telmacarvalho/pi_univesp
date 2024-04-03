<?php
$servidor = "localhost";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "nome_do_banco";

// Conexão com o banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Consulta ou manipulação de dados aqui

// Fechando a conexão
$conexao->close();
?>
