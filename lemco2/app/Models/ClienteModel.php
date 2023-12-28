<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'Clientes';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Empresa',
        'Cargo',
        'Contacto',
        'Telefono',
        'Correo',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
