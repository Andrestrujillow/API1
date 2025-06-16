<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Training extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link',
        'provider',
        'start_date',
        'end_date',
    ];

    // Lista blanca de relaciones permitidas para incluir vía ?included=
    protected $allowIncluded = ['users'];

    // Lista blanca de campos permitidos para filtrar vía ?filter[title]=Laravel
    protected $allowFilter = ['id', 'title', 'provider'];

    // Relación muchos a muchos con usuarios (tabla pivote inscripcion_capacitacion)
    public function users()
    {
        return $this->belongsToMany(User::class, 'inscripcion_capacitacion');
    }

    // Scope para incluir relaciones dinámicamente
    public function scopeIncluded(Builder $query)
    {
        if (empty($this->allowIncluded) || empty(request('included'))) {
            return;
        }

        $relations = explode(',', request('included'));
        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }

    // Scope para filtrar dinámicamente por parámetros en la URL
    public function scopeFilter(Builder $query)
    {
        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $field => $value) {
            if ($allowFilter->contains($field)) {
                $query->where($field, 'LIKE', '%' . $value . '%');
            }
        }
    }
}
