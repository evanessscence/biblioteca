<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $table = 'libros';
    protected $primaryKey = 'libro_id';
    protected $fillable = ['titulo', 'autor', 
    'isbn', 'anio_publicacion','editorial', 'categoria', 'cantidad_ejemplares',
    'ejemplares_disponibles', 'estado', 'imagen_url'];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'libro_id', 'libro_id');
    }
}
