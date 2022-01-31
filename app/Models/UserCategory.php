<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "category_id"
    ];

    public function getUser(){
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function getCategory(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }
}
