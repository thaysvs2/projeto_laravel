<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function itemDetalhe() {
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    //model item que mapeia a tabela produtos tem um itemDetalhe que mapeia a tabela 
    //produto_detalhes e o relacionamento é lá em produto_detalhes a fk é produto_id 
    //e portando estamos encaminhando a pk da tabela produtos para estabelecer esse relacionamento
    }

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }
}
