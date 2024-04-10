<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable = ['title', 'category_id', 'img'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
