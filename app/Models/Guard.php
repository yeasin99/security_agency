<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guard extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function guardCategory()
    {
    return $this -> belongsTo(Route::class,'category_id','id');
    }
}
