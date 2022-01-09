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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function planDetail(){
        return $this->hasMany(PlanDetail::class);
    }
}