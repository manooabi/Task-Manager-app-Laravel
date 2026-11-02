<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    //
      public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

          public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
        
        public function priority(): BelongsTo
    {
        return $this->belongsTo(Priority::class);
    }
             
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
