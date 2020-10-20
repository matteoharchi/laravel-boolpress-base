<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
   public $timestamps = false;
   protected $fillable = [
       'telefono', 'avatar', 'user_id'
   ];
//relazione tra i models -> relazione 1 ad 1
   public function user(User $user)
    {
        return $this->belongsTo('App\User');
    }
}
