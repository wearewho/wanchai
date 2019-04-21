<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $table = 'gallery_image';

    public function gallery() 
    {
        return $this->belongsTo(Gallery::class); //กําหนด FK ด้วย
    }
}
