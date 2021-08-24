<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'date_created', 'date_started', 'date_completed', 'due_date', 'status_id', 'color', 'parent_project_id'];

    public $timestamps = false;
}
