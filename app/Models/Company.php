<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    //explain the relations of model, look at ERD Diagram for more info
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'id');
    }
}
