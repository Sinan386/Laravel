<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotoController extends Controller
{
    public function toto (int $id) {
        return view ('toto' , ['id' => $id]);
    }
}
