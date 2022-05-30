<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['name', 'path', 'thumbnail', 'picturable_id', 'picturable_type', 'picture_meta_alt', 'picture_meta_title'];

}
