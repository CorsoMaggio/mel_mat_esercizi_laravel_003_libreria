<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //attributi:già collegata alla tabella
    //name, pages, years
    protected $fillable = ['name', 'pages', 'year', 'price'];
}
