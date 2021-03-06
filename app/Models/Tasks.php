<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'date_created', 'date_completed', 'due_date', 'status_id', 'project_id'];

    public $timestamps = false;
}
