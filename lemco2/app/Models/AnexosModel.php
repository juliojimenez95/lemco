<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnexosModel extends Model
{
    use HasFactory;

    protected $table = 'Anexos';
    protected $primaryKey = 'ID';    
    public $timestamps = false;


    protected $fillable = [
        'UsuarioID',
        'Representacion',
        'Rut',
        'Declaracion',
        'Bancaria',
        'Financieros',
        'CertificacionOEA',
        'CertificadoBasc',
        'Anexo',
        'ConflitoInteres',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
