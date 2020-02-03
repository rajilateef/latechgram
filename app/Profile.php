<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url', 'image', 'user_id',
    ];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/kMylqMwKR75OmELLvHXecZC1Jf6SfEv9Jk22PUlK.png';
        return  '/storage/'. $imagePath;
    }
    public function user(){
        return $this->belongsTo('App\User');
    }



}
