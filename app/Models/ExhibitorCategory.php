<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'slug',
])]
class ExhibitorCategory extends Model
{

    use HasFactory;
    
    public function exhibitors(): HasMany
    {
        return $this->hasMany(Exhibitor::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
