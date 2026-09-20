<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class IncludeExhibitors
{
    public function __construct(
        protected bool $includeExhibitors = false
    ) {}

    public function handle(Builder $query, Closure $next)
    {
        if ($this->includeExhibitors) {
            $query->with('exhibitors');
        }

        return $next($query);
    }
}