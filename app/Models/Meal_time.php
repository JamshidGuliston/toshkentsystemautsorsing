<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal_time extends Model
{
    use HasFactory;
    protected $fillable = [
    	'meal_time_name',
	];
}
