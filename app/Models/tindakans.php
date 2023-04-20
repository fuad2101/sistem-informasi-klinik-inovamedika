<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tindakans extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pasiens(){
        return $this->belongsTo(pasiens::class);
    }
}
