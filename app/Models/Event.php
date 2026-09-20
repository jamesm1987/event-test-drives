<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\ActiveScope;

#[Fillable([
    'name',
    'slug',
    'location',
    'latitude',
    'longitude',
    'venue_image',
    'map_image',
    'start_at',
    'end_at',
    'archived_at',
])]
class Event extends Model
{
    use HasFactory;
    
    protected $casts = [
        'start_at'    => 'datetime',
        'end_at'      => 'datetime',
        'archived_at' => 'datetime',
    ];

    public static function booted(): void
    {
        static::addGlobalScope(new ActiveScope());
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function archive(): void
    {   
        $this->update([
            'archived_at' => Carbon::now(),
            'slug'        => "{$this->slug}-{$this->start_at->year}-archived"
        ]);
    }

    public function manufacturers(): BelongsToMany
    {
        return $this->belongsToMany(Manufacturer::class);
    }

    public function exhibitors(): BelongsToMany
    {
        return $this->belongsToMany(Exhibitor::class);
    }

    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Vehicle::class);
    }


}
