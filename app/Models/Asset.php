<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    use HasFactory, SoftDeletes;
    #[Fillable(['category_id', 'name', 'asset_code', 'description', 'status', 'photo_path'])]

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }

    public function getPhotoUrlAttribute(): string
    {
        if(!$this->photo_path){
            return asset('images/default-asset.png');
        }
        return asset('storage/' . $this->photo_path);
    }
}
