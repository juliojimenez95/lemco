<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadesModel extends Model
{
    use HasFactory;
    protected $table = 'Entidades';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Entidad',
        'Pais',
        'Ciudad',
        'Tproducto',
        'Identificacionp',
        'Monto',
        'TMoneda',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
