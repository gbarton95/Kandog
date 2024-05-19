<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $table = "perros";

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'nombre',
        'edad',
        'sexo',
        'raza',
        'peso',
        'PPP',
        'anotaciones',
        'tutor_nombre',
        'tutor_apellidos',
        'telefono',
        'email',
        'codigo_postal',
        'calle',
        'active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sesiones()
    {
        return $this->hasMany(Sesion::class, 'sesion_id');
    }

}
