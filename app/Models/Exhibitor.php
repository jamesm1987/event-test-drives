<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'slug',
    'logo',
    'exhibitor_category_id'
])]
class Exhibitor extends Model
{
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->belongsTo(ExhibitorCategory::class, 'exhibitor_category_id');
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }    
}
