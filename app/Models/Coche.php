<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coche extends Model
{
    use HasFactory;
    protected $fillable = ['marca','modelo','matricula'];

    public function propietario():BelongsTo
    {
        return $this->belongsTo(Propietario::class);
    }
}
