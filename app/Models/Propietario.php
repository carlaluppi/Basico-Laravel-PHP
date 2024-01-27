<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propietario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','dni'];

    public function coches(): HasMany 
    {
        return $this->hasMany(Coche::class, 'foreign_key');
    }
}
