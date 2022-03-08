<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titlemenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'titlemenu_name',
        'titlemenu_season_id'
    ];

    public function age_range(){
        return $this->belongsToMany(Age_range::class, 'titlemenu_age_range');
    }
}
