<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    function getNameAttribute($value){
        return ucfirst($value);
        }
 
        function getGenderAttribute($value){
            return ucfirst($value.'[]');
        }
        function setNameAttribute($value)
        {
            return $this->attributes['name'] = "Mr ".ucfirst($value);
        }
        function setGenderAttribute($value){
            return $this->attributes['gender'] =  ucfirst($value);
        }
    
        function UserData(){
            return $this->hasOne('App\Models\User');
        }
    

}
