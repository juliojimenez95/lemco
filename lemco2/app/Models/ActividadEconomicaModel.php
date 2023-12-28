<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadEconomicaModel extends Model
{
    use HasFactory;
    protected $table = 'ActividadEconomica';
    protected $primaryKey = 'ID';    
    public $timestamps = false;

    protected $fillable = [
        'UsuarioID',
        'TributaEEUU',
        'CIIU',
        'TEmpresa',
        'Cuales1',
        'TRegimen',
        'ActivosVirtuales',
        'Cuales2',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
