<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function orderGuard()
    {
        return $this->belongsTo(Guard::class,'guard_id','id');
    }
    public function orderUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
