<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamentos;

class OrcamentosController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');	//Impede que a página de cadastro de orçamento seja acessada quando o usuário não fez login
    }

	public function create(){
    	return view('/create');		//Redireciona o usuário à view de cadastro de orçamentos
    }

    public function index()
    {
        $orcamentos = Orcamentos::orderBy('created_at', 'desc');	//Ordena os orçamentos com base na data de cadastro, de forma decrescente
        return view('/home');
    }


    public function store(){

    	//Função que armazena os dados cadastrados no banco de dados

    	$data = request()->validate([
    		
    		'orcamento_id' => ['required', 'integer', 'max:8', 'unique:orcamentos'],
            'cliente' => ['required', 'string', 'max:255'],
            'data' => ['required', 'string'],
            'hora' => ['required', 'string'],
            'vendedor' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string', 'max:255'],
            'valor' => 'numeric',
    	]);

    	

    	auth()->user()->orcamentos()->create([
    		

    		'orcamento_id'=>$data['orcamento_id'], 
    		'cliente'=>$data['cliente'], 
    		'data'=>$data['data'], 
    		'hora'=>$data['hora'], 
    		'vendedor'=>$data['vendedor'], 
    		'descricao'=>$data['descricao'], 
    		'valor'=>$data['valor'],
    		
    	]);
    	

    	return redirect('/home');
    }
}






    /*public function store(Request $request){

    	
    		$orcamento = new Orcamentos;
    		$orcamento->id = $request->id;
    		$orcamento->cliente = $request->cliente;
    		$orcamento->data = $request->data;
    		$orcamento->hora = $request->hora;
    		$orcamento->vendedor = $request->vendedor;
    		$orcamento->descricao = $request->descricao;
    		$orcamento->valor = $request->valor;

    		return redirect()->route('home')->with('message', 'Orçamento criado com sucesso!');
    }*/

