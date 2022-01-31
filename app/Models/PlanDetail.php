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

    public function getPlanHeader(){
        return $this->belongsTo(PlanHeader::class, "plan_id", "id");
    }

    public function getDestination(){
        return $this->belongsTo(Destination::class, "destination_id", "id");
    }
}
