<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Property extends Model
{
    //
        protected $guarded = [];

        public function user(){
            return $this->hasOne(User::class, 'id', 'user_id');
        }

        public function cityname(){
            return $this->hasOne(City::class, 'id', 'city');
        }

        public function districtname(){
            return $this->hasOne(District::class, 'id', 'state');
        }


}
