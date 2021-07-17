<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Gammer;

class Gamer extends Controller
{
    public function index() {
        echo 'salmalekum dav in Gammer';
    }
    public function add($name = 'admin', $roole = 1, $room = 1) {
        Gammer::createGamer($name, $roole, $room);
    }

}
