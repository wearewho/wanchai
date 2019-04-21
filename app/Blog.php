<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function imageblog() 
    {         
        return $this->hasMany(ImageBlog::class); //กําหนดความสัมพันธ์รูปแบบ One To Many 
    } 
}
