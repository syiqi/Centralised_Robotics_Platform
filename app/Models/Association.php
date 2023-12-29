<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    //belongs to method??
    protected $guarded = [];
    public function organizations(): BelongsTo
    {
        return $this->belongsTo(Organizations::class);
    }
}
