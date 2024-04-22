// Função para buscar informações do CEP
function buscarInformacoesCEP(cep) {
    // Faz uma requisição para uma API de consulta de CEP
    fetch('https://h-apigateway.conectagov.estaleiro.serpro.gov.br/api-cep/v1/consulta/cep/' + cep)
        .then(function(response) {
            // Verifica se a requisição foi bem-sucedida
            if (!response.ok) {
                throw new Error('Não foi possível obter as informações do CEP. Status: ' + response.status);
            }
            // Converte a resposta para JSON
            return response.json();
        })
        .then(function(data) {
            // Preenche os campos com as informações retornadas
            document.getElementById('logradouro').value = data.logradouro;
            document.getElementById('bairro').value = data.bairro;
            document.getElementById('cidade').value = data.cidade;
            document.getElementById('estado').value = data.estado;
            // Se necessário, adicione outras informações do endereço aqui
        })
        .catch(function(error) {
            console.error('Ocorreu um erro ao buscar as informações do CEP:', error);
        });
}
