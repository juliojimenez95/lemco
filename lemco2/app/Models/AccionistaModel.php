<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccionistaModel extends Model
{
    use HasFactory;

    protected $table = 'Accionistas';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Nombre',
        'Participacion',
        'Tidentificacion',
        'Identificacion',
        'Nacionalidad',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
