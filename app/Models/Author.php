<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstName', 'lastName', 'birthDate', 'author_id'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
