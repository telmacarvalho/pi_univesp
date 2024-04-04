<?php
$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$dbname = "projeto_integrador_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$first_name = $conn->real_escape_string($_POST['nome']);
$last_name = $conn->real_escape_string($_POST['sobrenome']);
$email = $conn->real_escape_string($_POST['e-mail']);
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$logradouro = $conn->real_escape_string($_POST['logradouro']);
$numero = $_POST['numero'];
$complemento = $conn->real_escape_string($_POST['complemento']);
$bairro = $conn->real_escape_string($_POST['bairro']);
$cidade = $conn->real_escape_string($_POST['cidade']);
$estado = $conn->real_escape_string($_POST['estado']);

// Insert into nome_completo table
$sql_nome_completo = "INSERT INTO nome_completo (nome, sobrenome) VALUES ('$first_name', '$last_name')";

// Insert into endereco table
$sql_endereco = "INSERT INTO endereco (cep, logradouro, numero, complemento, bairro, cidade, estado)
                VALUES ('$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$estado')";

// Insert into contato table
$sql_contato = "INSERT INTO contato (data_nascimento, telefone, `e-mail`, id_nome_completo, id_endereco)
                VALUES ('$data_nascimento', '$telefone', '$email', 
                        (SELECT id FROM nome_completo WHERE nome = '$first_name' AND sobrenome = '$last_name'),
                        (SELECT id FROM endereco WHERE cep = '$cep' AND numero = '$numero'
                        ))";

if ($conn->query($sql_nome_completo) === TRUE && $conn->query($sql_endereco) === TRUE && $conn->query($sql_contato) === TRUE) {
    echo "Records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
