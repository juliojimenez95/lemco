<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadFModel extends Model
{
    use HasFactory;
    
    protected $table = 'EntidadesF';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Entidad',
        'Pais',
        'Ciudad',
        'Tproducto',
        'Cuenta',
        'Correo',
        'Certificado',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
