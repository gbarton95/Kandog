<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleccion extends Model
{
    use HasFactory;

    protected $table = "colecciones";

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'nombre',
        'descripcion',
        'imagenCabecera'
    ];
    
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
