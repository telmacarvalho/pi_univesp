function buscaCep() {
    let cep = document.getElementById('txtCep').value;
    if(cep !== ""){
        let url = "http://brasilapi.com.br/api/cep/v1/" + cep;
        
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        //tratar a resposta da requisição
        req.onload = function (){
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
                document.getElementById("logradouro").value = endereco.street;
                document.getElementById("bairro").value = endereco.neighborhood;
                document.getElementById("cidade").value = endereco.city;
                document.getElementById("estado").value = endereco.state;
            }
        }
    }
    else if(req.status === 404){
        alert("CEP inválido");
    }
    else{
        alert("Erro ao fazer a requisição")
    }
}

window.onload = function(){
    let txtCep = document.getElementById("txtCep");
    txtCep.addEventListener("blur", buscaCep);
}