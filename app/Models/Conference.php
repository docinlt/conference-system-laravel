<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'lecturers',
        'date',
        'time',
        'address',
    ];
    protected $casts = [
    'date' => 'date',
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_conferences')->withTimestamps();
    }
}

?>