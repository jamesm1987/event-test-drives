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
])]
class Exhibitor extends Model
{
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->belongsTo(ExhibitorCategory::class);
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }    
}
