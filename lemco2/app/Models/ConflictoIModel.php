<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConflictoIModel extends Model
{
    use HasFactory;

    protected $table = 'Conflicto_Intereses';
    protected $primaryKey = 'ID';    
    public $timestamps = false;
     protected $fillable = [
        'UsuarioID',
        'Nombre',
        'Tidentificacion',
        'Identificacion',
        'Firma',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
