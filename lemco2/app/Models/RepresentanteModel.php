<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepresentanteModel extends Model
{
    use HasFactory;
    protected $table = 'representantes';
    protected $primaryKey = 'ID';    
    public $timestamps = false;
    protected $fillable = [
        'UsuarioID',
        'Nombre',
        'Nacionalidad',
        'Tidentificacion',
        'identificacion',
        'Telefono',
        'Email',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
