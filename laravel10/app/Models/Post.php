<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts1';  // <-добавить  эту строку, Если меняем название таблицы c posts на posts1 в SQL
    protected $guarded = [];
}
