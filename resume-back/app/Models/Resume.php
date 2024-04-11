<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kana',
        'birthDate',
        'postalCode',
        'address',
        'gender',
        'phone',
        'email',
        'motivation',
        'selfPr',
    ];

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
