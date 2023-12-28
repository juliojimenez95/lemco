<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    use HasFactory;
    protected $table = 'CONTACTOS';
    protected $primaryKey = 'ID';    
    public $timestamps = false;
    protected $fillable = [
        'UsuarioID',
        'CorreoFE',
        'CargoFE',
        'NombreFE',
        'Email',
        'TelefonoFE',
        'FechaCierre',
        'ContactoCo',
        'TelefonoCo',
        'CargoCo',
        'CelularCo',
        'CorreoCo',
        'ContactoCa',
        'TelefonoCa',
        'CargoCa',
        'CelularCa',
        'CorreoCa',
        'ContactoF',
        'TelefonoF',
        'CargoF',
        'CelularF',
        'CorreoF',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
