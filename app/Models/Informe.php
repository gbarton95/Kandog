<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'perro_id',
        'nombre',
        'path',
    ];

    public function perro()
    {
        return $this->belongsTo(Perro::class);
    }

}
