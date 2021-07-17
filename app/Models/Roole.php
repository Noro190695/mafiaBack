<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roole extends Model
{
    use HasFactory;

    protected $table  = 'roole';
    public $timestamps = false;
    protected $fillable = ['name'];


}
