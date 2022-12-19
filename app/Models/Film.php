<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = 'genre';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return  $query->where('tittle', 'like', '%' . $search . '%')
                ->orWhere('tahun', 'like', '%' . $search  . '%');
        });

        $query->when($filters['genre'] ?? false, function ($query, $genre) {
            return $query->whereHas('genre', function ($query) use ($genre) {
                $query->where($genre);
            });
        });
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
