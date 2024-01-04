<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;
    
    // protected $fillable = ['providerName'];
    protected $guarded = [];

    public function association(): HasMany
    {
        return $this->hasMany(Association::class);
    }
    public function ministry(): HasMany
    {
        return $this->hasMany(Ministry::class);
    }
    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }
    public function personell(): HasMany
    {
        return $this->hasMany(Personell::class);
    }
    public function workplace(): HasMany
    {
        return $this->hasMany(Workplace::class);
    }
    
}
