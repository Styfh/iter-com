<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "destination_id",
        "category_id"
    ];

    public function getDestination(){
        return $this->belongsTo(Destination::class, "destination_id", "id");
    }

    public function getCategory(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }
}
