<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery'; 

    public function imagegallery() 
    {         
        return $this->hasMany(ImageGallery::class); //กําหนดความสัมพันธ์รูปแบบ One To Many 
    } 
}
