<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Public_info extends Model
{
    use HasFactory;
    protected $table = 'public_info';
    protected $fillable = [
        'title',
         'content',
        'slug',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
   // public function getRouteKeyName()
   // {
    //    return 'slug';
    //}
}