<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Attribute Casting
    /* Note: not using for the moment
    protected $casts = [
        'urls' => 'array' // $table->json('urls') need the casting:
    ];
    */

    protected $attributes = [
        'user_id' => 1,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}
