<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licitacoes extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_edital',
        'num_processo',
        'data_publicacao',
        'data_abertura',
        'modalidade',
        'objeto',
        'situacao',
        'resultado',
        'text_licitacao',
    ];
    public function file_uploads(){
        return $this->hasMany(file_uploads::class);
    }
}
