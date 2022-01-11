<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_name"
    ];

    public function destinationCategory(){
        return $this->hasMany(DestinationCategory::class);
    }

    public function userCategory(){
        return $this->hasMany(UserCategory::class);
    }
}
