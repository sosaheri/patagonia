<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [ 'title', 'details', 'photo','button_name','button_link'];

    public $timestamps = false;

}
