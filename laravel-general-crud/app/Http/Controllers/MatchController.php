<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyMatch;

class MatchController extends Controller
{
    public function homeFunction() {
        $matches = MyMatch::all();
        return view('pages.home', compact('matches'));
    }

    public function singleMatchFunction($id) {
        $match = MyMatch::findOrFail($id);
        return view('pages.singleMatch', compact('match'));
    }
}
