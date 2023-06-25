<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
