<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cv extends Model
{
    use HasFactory;
public function user(){
    return $this->belongsTo('App\Models\User');
}
}
