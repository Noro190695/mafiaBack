<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gammer extends Model
{
    use HasFactory;
    protected $table  = 'roole';
    public $timestamps = false;
    protected $guarded = false;

    public static function createGamer($name, $roole, $room){
        self::create([
            'name' => $name,
            'roole_id' => $roole,
            'room_id' => $room
        ]);
    }
}
