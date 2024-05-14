<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\NomeCompleto;

class ContatoController extends Controller
{
    public function index(){
        return view('contatos.index');
    }

    public function register(Request $request)
    {
        // Lógica para registrar o contato


        error_log('Im here before');
        // Validar os dados do formulário
        $request->validate([
            'primeiro_nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'telefone' => 'nullable|string|max:20', // O telefone é opcional
            // 'cep' => 'required|string|max:10',
            // 'logradouro' => 'required|string|max:255',
            // 'numero' => 'required|string|max:10',
            // 'complemento' => 'nullable|string|max:255', // O complemento é opcional
            // 'bairro' => 'required|string|max:255',
            // 'cidade' => 'required|string|max:255',
            // 'estado' => 'required|string|max:255',
            // 'cargo' => 'required|string|max:255',
            // 'midia' => 'required|string|max:255',
            // 'editoria1' => 'required|string|max:255',
            // 'editoria2' => 'nullable|string|max:255', // A segunda editoria é opcional
            // 'tipo_conteudo1' => 'required|string|max:255',
            // 'periodicidade1' => 'required|string|max:255',
            // 'tipo_conteudo2' => 'nullable|string|max:255', // O segundo tipo de conteúdo é opcional
            // 'periodicidade2' => 'nullable|string|max:255', // A segunda periodicidade é opcional
            // 'nome_empresa' => 'nullable|string|max:255', // O nome da empresa é opcional
            // 'url_empresa' => 'nullable|url|max:255', // A URL da empresa é opcional
            // 'explicacao_empresa' => 'nullable|string', // A explicação da empresa é opcional
            // 'aceito_termos' => 'required|accepted', // Certifique-se de que os termos sejam aceitos
        ]);

        error_log('Im here');
        // Criar um novo contato com os dados do formulário
        $contato = new Contato();
        $nome_completo = NomeCompleto::create([
            'nome' => $request->primeiro_nome,
            'sobrenome' => $request->sobrenome,
        ]);

        $contato->id_nome_completo = $nome_completo->id;
        $contato->data_nascimento = $request->data_nascimento;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        // $contato->cep = $request->cep;
        // $nome_completo= new NomeCompleto();
        // $nome_completo->nome = $request->primeiro_nome;
        // $nome_completo->sobrenome = $request->sobrenome;
        // $contato->nome_completo()->associate($nome_completo);
        // $contato->nome_completo = new NomeCompleto();
        // $contato->nome_completo->nome = $request->primeiro_nome;
        // $contato->nome_completo->sobrenome = $request->sobrenome;
        $contato->save();

        error_log('after save');
        // $user->primeiro_nome = $request->primeiro_nome;
        // $user->sobrenome = $request->sobrenome;
        // $user->data_nascimento = $request->data_nascimento;
        // $user->email = $request->email;
        // $user->senha = bcrypt($request->senha); // Certifique-se de criptografar a senha antes de armazená-la no banco de dados
        // $user->telefone = $request->telefone;
        // $user->cep = $request->cep;
        // $user->logradouro = $request->logradouro;
        // $user->numero = $request->numero;
        // $user->complemento = $request->complemento;
        // $user->bairro = $request->bairro;
        // $user->cidade = $request->cidade;
        // $user->estado = $request->estado;
        // $user->cargo = $request->cargo;
        // $user->midia = $request->midia;
        // $user->editoria1 = $request->editoria1;
        // $user->editoria2 = $request->editoria2;
        // $user->tipo_conteudo1 = $request->tipo_conteudo1;
        // $user->periodicidade1 = $request->periodicidade1;
        // $user->tipo_conteudo2 = $request->tipo_conteudo2;
        // $user->periodicidade2 = $request->periodicidade2;
        // $user->nome_empresa = $request->nome_empresa;
        // $user->url_empresa = $request->url_empresa;
        // $user->explicacao_empresa = $request->explicacao_empresa;

        // Redirecionar o usuário para alguma página após o registro
        return redirect()->route('home')->with('success', 'Usuário registrado com sucesso!');

    }
}
