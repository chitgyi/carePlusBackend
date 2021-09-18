<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'content',
        'doctor_id',
        'categroy_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
