<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $guarded = ['id'];

    public function NewsKategory()
    {
        return $this->belongsTo(NewsKategory::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
