<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'industry',
        'description',
        'tools',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
