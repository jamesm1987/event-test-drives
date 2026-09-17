<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class IncludeExhibitors
{
    public function __invoke(Builder $query, Closure $next)
    {      dd(request()->boolean('exhibitors'));
        if (request()->boolean('exhibitors')) {
            dd("TESTER");
            $query->with('exhibitors');
        }

        return $next($query);
    }
}