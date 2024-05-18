<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perro;
use App\Models\User;

class Sesion extends Model
{
    use HasFactory;

    protected $table = "sesiones";

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'perro_id',
        'asunto',
        'ubicacion',
        'inicio',
        'duracion',
        'done'
    ];
    
    public function perro()
    {
        return $this->belongsTo(Perro::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
