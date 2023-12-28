<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FondosModel extends Model
{
    use HasFactory;
    
    protected $table = 'FONDOS';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Respuesta',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
