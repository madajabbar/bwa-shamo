<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'feeling',
    ];
    public function tips() {
        return $this->hasMany(Tip::class,'category_id','id');
    }
    public function answers() {
        return $this->hasMany(Answer::class,'category_id','id');
    }
}
