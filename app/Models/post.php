<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory; 
    public function video()
    {
        return $this->hasOne(Video::class);
    }

    protected $fillable = ['title', 'contents', 'video'];

}
