<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = "files";

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'perro_id',
        'filename',
        'type',
        'path',
        'coleccion_id',
        'active'
    ];

    public function perro()
    {
        return $this->belongsTo(Perro::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function colleccion()
    {
        return $this->belongsTo(Coleccion::class);
    }
}
