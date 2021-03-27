<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        /**
         * Get the user that owns the Course
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        {
            return $this->belongsTo(User::class);
        }
    }

    public function posts()
    {
        /**
         * Get the user that owns the Course
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        {
            return $this->hasMany(Post::class);
        }
    }


    public function getExcerptAttribute()
    {
        return substr($this->description, 0,80) . "...";
    }

    public function similar()
    {
        return $this->where('category_id', $this->category_id)
        ->with('user')
        ->take(2)
        ->get();
    }
}
