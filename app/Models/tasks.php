<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

        protected $fillable = [
        'nama',
        'kelas',
    ];




            public function scopeSelectedById($query, $id) {
        return $query->where('id', $id);
    }

}
