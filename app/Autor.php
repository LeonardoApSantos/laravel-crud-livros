<?php

namespace App;
use App\Livro;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $fillable=['nome', 'biografia', 'cd_autor','dt_nascimento', 'livroId'];
    public $timestamps=false;
    
    public function livros()
    {
        return $this->belongsToMany(Livro::class);
    }
}

