<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasiens extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tindakans(){
        return $this->hasMany(tindakans::class);
    }

    public function PasienAktif(){
        $this->hasOne(PasienAktif::class);
    }

}
