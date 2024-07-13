<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function parent(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function children(): HasMany
    {
        return $this->HasMany(Category::class);
    }
    
    public function properties(): HasMany 
    {
        return $this->HasMany(Property::class);
    }

    public function attachments(): HasMany
    {
        return $this->HasMany(Attachment::class);
    }
}
