<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class Index extends Controller {
    public function index() {
        return view('index');
    }
}
