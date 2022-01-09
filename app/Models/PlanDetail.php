<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_id",
        "destination_id"
    ];

    public function planHeader(){
        return $this->belongsTo(PlanHeader::class);
    }

    public function destination(){
        return $this->belongsTo(Destination::class);
    }
}
