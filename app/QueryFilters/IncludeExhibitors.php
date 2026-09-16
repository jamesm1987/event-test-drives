<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class IncludeExhibitors
{
    public function __invoke(Builder $query, Closure $next)
    {
        if (request()->boolean('exhibitors')) {
            $query->with('exhibitors');
        }

        return $next($query);
    }
}