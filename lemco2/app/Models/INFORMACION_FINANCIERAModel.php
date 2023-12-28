<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class INFORMACION_FINANCIERAModel extends Model
{
    use HasFactory;

    protected $table = 'INFORMACION_FINANCIERA';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'Capital',
        'Pasivos',
        'Activos',
        'IngresosMensuales',
        'EgresosMensuales',
        'ConceptoIngresosNoOperacionales',
        'IngresosNoOperacionales',
        'MonedaExt',
        'TOperaciones',
        'Cuales1',
        'ProductosME',
        'Cuales2',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }


}
