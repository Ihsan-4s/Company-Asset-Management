<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
#[Fillable(['name', 'description'])]


class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory;


    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }
    
}
