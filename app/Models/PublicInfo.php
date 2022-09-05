<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicInfo extends Model
{
    use HasFactory;
    protected $table = 'public_info';
    protected $fillable = [
        'title',
        'content',
        'slug'
    ];
}
