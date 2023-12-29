<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    
    // protected $fillable = ['providerName'];
    protected $guarded = [];

    public function association(): HasMany
    {
        return $this->hasMany(association::class);
    }
    
}
