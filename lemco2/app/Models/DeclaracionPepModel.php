<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclaracionPepModel extends Model
{
    use HasFactory;

    protected $table = 'DeclaracionPep';
    protected $primaryKey = 'ID';    
    public $timestamps = false;
    protected $fillable = [
        'UsuarioID',
        'Recursosp',
        'Quien1',
        'Anexo1',
        'Poderp',
        'Quien2',
        'Anexo2',
        'Reconocimiento',
        'Quien3',
        'Anexo3',
        'PEPOrganizacioni',
        'Quien4',
        'Anexo4',
        'PEPextranjero',
        'Quien5',
        'Anexo5',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}
