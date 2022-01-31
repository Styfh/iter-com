<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_name", 
        "user_id"
    ];

    public function getUser(){
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function getPlanDetail(){
        return $this->hasMany(PlanDetail::class);
    }
}
