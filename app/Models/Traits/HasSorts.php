<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

trait HasSorts
{
    public function scopeApplySorts(Builder $query, $sort)
    {
        if ( ! property_exists($this, 'allowed_sorts')) {
            abort(500, "Please set the public propery allowed_sorts to use the trait HasSorts inside the class " . get_class($this) . ".");
        }

        if (is_null($sort)) {
            return;
        }

        $sort_fields = Str::of($sort)->explode(',');

        foreach ($sort_fields as $sort_field) {

            $direction = 'asc';

            if (Str::of($sort_field)->startsWith('-')) {
                $direction = 'desc';
                $sort_field = Str::of($sort_field)->substr(1);
            }

            if ( ! collect($this->allowed_sorts)->contains($sort_field)) {
                abort(400, "Invalid Query Parameter, " . $sort_field . " is not allowed.");
            }

            $query->orderBy($sort_field,$direction);
        }
    }
}