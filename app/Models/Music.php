<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Music extends Model
{
    public function live(): BelongsTo
    {
        return $this->belongsTo(Live::class);
    }
}
