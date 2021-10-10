<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'naicsCode','state',
        
    ];
    protected $casts = [
        'naicsCode' => 'array',
        'state' => 'array',
        
    ];
}
