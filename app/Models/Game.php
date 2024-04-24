<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ["title","release_year","poster","category_id"];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function consoles(){
        return $this->belongsToMany(Console::class);
    }
}
