<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file_uploads extends Model
{
    use HasFactory;
    protected $fillable = [
        'licitacoes_id',
        'file_name',
        'name_custom',
    ];
    public function licitacoes(){
        return $this->belongsTo(licitacoes::class);
    }
}
