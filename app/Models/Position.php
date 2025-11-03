<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: Position.php
 * Fecha de creación: 02/11/25
 * Realizado por: Alfonso Angel García Hernández
 * Validado por: Alfonso Angel García Hernández
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
