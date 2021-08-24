<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habits extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'date_created', 'date_started', 'date_completed', 'due_date'];

    public $timestamps = false;
}
