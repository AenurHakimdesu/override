<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'order',
        'name',
        'slug',
        'lokasi',
    ];
    public function photos()
    {
        return $this->hasMany(Photo::class, 'album_id');
    }
}
