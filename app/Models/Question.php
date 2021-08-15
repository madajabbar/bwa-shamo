<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'category_id',
        'point',
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
