<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo_id','name', 'location', 'caption','description',
    ];
}