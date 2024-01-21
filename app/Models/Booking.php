<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    Protected $fillable=['name','hotel_id', 'checkin', 'checkout','rooms_num','persons_num', 'status', 'price','user_id'];
     
    
    
    public function hotel(){
        return $this->belongsTo('App\Models\Hotel','hotel_id');
      }
      public function user()
      {
        return $this->belongsTo(User::class, 'user_id');
      }
}
