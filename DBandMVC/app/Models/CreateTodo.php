<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateTodo extends Model
{
    use HasFactory;
    protected $table = 'todos';
    protected $fillable = ['title', 'description'];
}
