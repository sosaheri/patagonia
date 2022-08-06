<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seotool extends Model
{
    protected $fillable = ['google_analytics','meta_keys','facebook_pixel'];
    protected $table    = 'seotools';
    public $timestamps  = false;
}
