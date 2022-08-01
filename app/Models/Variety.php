<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    use HasFactory;
    protected $table = 'variety';
    protected $fillable = [
        'name',
        'slug'
    ];
    
    public function data(){
        // return $this->hasMany(Post::class);
    }
}
