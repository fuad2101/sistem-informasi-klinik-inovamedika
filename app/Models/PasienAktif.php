<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienAktif extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function pasiens(){
        $this->belongsTo(pasiens::class);
    }
}
