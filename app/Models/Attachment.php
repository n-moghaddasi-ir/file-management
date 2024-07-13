<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function property(): belongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
