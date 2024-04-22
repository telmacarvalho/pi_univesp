<form action="enviar_dados.php">

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Novos Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        fieldset {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
        }
        legend {
            padding: 5px 10px;
            font-weight: bold;
            color: #007bff;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"] {
            width: calc(100% - 18px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Formulário de Cadastro de Novos Usuários</h1>
    <form action="processar_cadastro_usuario.php" method="POST">
        <fieldset>
            <legend>Informações Pessoais</legend>
            <label for="primeiro_nome">Primeiro Nome:</label>
            <input type="text" id="primeiro_nome" name="primeiro_nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone">
        </fieldset>

        <fieldset>
            <legend>Endereço</legend>
            <label for="txtCep">CEP (somente números):</label>
            <input type="text" id="txtCep" name="cep" required>

            <label for="logradouro">Logradouro:</label>
            <input type="text" id="logradouro" name="logradouro" required>

            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>

            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento">

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>

            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>
        </fieldset>

        <fieldset>
            <legend>Informações Profissionais</legend>
            <label for="primeiro_nome">Primeiro Nome:</label>
            <input type="text" id="primeiro_nome" name="primeiro_nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone">
        </fieldset>

        <fieldset>
            <legend>Termos de Uso</legend>
            <label>
                <input type="checkbox" id="aceito_termos" name="aceito_termos" required>
                Eu li e aceito os <a href="termos-de-uso.html" target="_blank">termos de uso</a>
            </label>
        </fieldset>

        <input type="submit" value="Cadastrar">
    </form>
    <script type="text/javascript" src="js/CEP.js"></script>
</body>
</html>

    </form>
    </form>