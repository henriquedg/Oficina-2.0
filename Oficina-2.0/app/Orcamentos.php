<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{

	//Campos que podem ser preenchidos no cadastro de orçamento
    protected $fillable=[
    	'orcamento_id','cliente','data','hora','vendedor','descricao','valor'
    ];

    //Orcamentos pertence à User
    public function user(){
    	return $this->belongsTo(User::class);
    }

}
