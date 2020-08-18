<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Orcamentos;
use App\User;

//Controller relacionado à pesquisa de orçamentos que foram cadastrados no banco de dados

class PesquisaController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');	//Impede que a rota search seja acessada quando o usuário não fez login
    }

	public function index(){

		$user_id = auth()->user()->id;
        $user = User::find($user_id);

	    $q = Input::get ( 'q' );	//Pega a informação inserida pelo usuário no campo de pesquisa

	    $opcaoCliente = Input::get ( 'cliente' );	//Pega a informação sobre a checkbox 'cliente' estar marcada ou não

	    $opcaoVendedor = Input::get ( 'vendedor' );	//Pega a informação sobre a checkbox 'vendedor' estar marcada ou não

	    $data1 = Input::get ( 'data1' );	//Pega a data inicial inserida pelo usuário
	    $data2 = Input::get ( 'data2' );	//Pega a data final inserida pelo usuário


	    //Busca orçamentos cadastrados pelo usuário logado
	    $orcamentoPorNome = Orcamentos::where('user_id','LIKE',$user_id)->
	    where($opcaoCliente,'LIKE','%'.$q.'%')->
	    orWhere($opcaoVendedor,'LIKE','%'.$q.'%')->
	    where('user_id','LIKE',$user_id)->
	    orderBy('data','desc')->get();


	    $orcamentoPorData = Orcamentos::where('user_id','LIKE',$user_id)->
	    whereBetween('data',[$data1,$data2])->
	    orderBy('data','desc')->get();


	    if(count($orcamentoPorNome) > 0 && $q!=null){

	    	//Retorna os resultados da busca
	        return view('home')->
	        with('orcamentos', $user->orcamentos)->
	        withDetails($orcamentoPorNome)->
	        withQuery ( $q );
	    }
	    else

	    if(count($orcamentoPorNome) > 0 && $data1!=null && $data2!=null){

	    	//Retorna os resultados da busca
	        return view('home')->
	        with('orcamentos', $user->orcamentos)->
	        withDetails($orcamentoPorData)->
	        withQuery ( '' );
	    }
	    else return view ('home')->withMessage('Nenhum resultado');
	}
}
