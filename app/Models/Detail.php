<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quote_details','indication','register',
        
    ];
    protected $casts = [
        'quote_details' => 'array',
        'indication' => 'array',
        'register' => 'array',
        
    ];
}
