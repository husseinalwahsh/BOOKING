<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    Protected $fillable=['name','distance','image','price','desc','rating','countrie_id'];


      public function country(){
        return $this->belongsTo('App\Models\country','countrie_id');
      }


}
