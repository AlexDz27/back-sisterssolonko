<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
  protected $casts = [
    'photos' => 'array',
    'details' => 'array',
    'sizes' => 'array',
  ];
  protected $hidden = ['created_at', 'updated_at'];
}
