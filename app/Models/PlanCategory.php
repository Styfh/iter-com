<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_id",
        "category_id"
    ];

    public function plan(){
        return $this->belongsTo(PlanHeader::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
