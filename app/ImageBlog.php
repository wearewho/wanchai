<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageBlog extends Model
{
    protected $table = 'blog_image';

    public function blog() 
    {
        return $this->belongsTo(Blog::class); //กําหนด FK ด้วย
    }
}
