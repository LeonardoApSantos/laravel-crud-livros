<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';
    protected $fillable=['titulo','subtitulo','sinopse', 'autor', 'vl_venda', 'dt_lancamento'];
    public $timestamps=false;
    
    public function autores()
    {
        return $this->belongsToMany(Autor::class);
    }
}
