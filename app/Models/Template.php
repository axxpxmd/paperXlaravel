<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table    = 'template';
    protected $fillable = ['id', 'logo', 'logo-title', 'created_at', 'updated_at'];
}
