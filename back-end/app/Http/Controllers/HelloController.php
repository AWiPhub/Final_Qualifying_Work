<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hello;

class HelloController extends Controller
{
    public function search(Request $req) {
        return Hello::all();
    }
}
