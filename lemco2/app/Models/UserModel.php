<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    
    protected $table = 'usuarios';
    protected $primaryKey = 'ID';    
    public $timestamps = false; 
    protected $fillable = [
        'Empresa',
        'Tvinculacion',
        'Tpersona',
        'Origen_empresa',
        'Nombre',
        'Tipo_identificacion',
        'Identificacion',
        'Direccion',
        'Telefono',
        'Pagina_web',
        'Rol',
    ];
}
