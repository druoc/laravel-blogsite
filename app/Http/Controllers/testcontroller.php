<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function homepage() {
        return ' <h1>Welcome to the site!</h1>';
    }
}
