<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['name', 'slug', 'description'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}