<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ministry extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function organizations(): BelongsTo
    {
        return $this->belongsTo(Organizations::class, 'id');
    }
}
