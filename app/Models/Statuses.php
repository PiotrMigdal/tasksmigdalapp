<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'percent_progress'];

    //To disable default timestamps use this
    public $timestamps = false;
}
