<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyMatch;

class MatchController extends Controller
{

    private function getValidationRules() {
        return [
            'team1' => 'required|string|min:2|max:255',
            'team2' => 'required|string|min:2|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean',
        ];
    }

    public function homeFunction() {
        $matches = MyMatch::all();
        return view('pages.home', compact('matches'));
    }

    public function singleMatchFunction($id) {
        $match = MyMatch::findOrFail($id);
        return view('pages.singleMatch', compact('match'));
    }

    public function createMatchFunction() {
        return view('pages.createMatch');
    }

    public function storeMatchFunction(Request $request) {
        $validated = $request -> validate($this -> getValidationRules());
        $match = MyMatch::create($validated);
        return redirect() -> route('singleMatch', $match -> id);
   }

   public function editMatchFunction($id) {
    $match = MyMatch::findOrFail($id);
    return view('pages.editMatch', compact('match'));
   }

   public function updateMatchFunction(Request $request, $id) {
    $match = MyMatch::findOrFail($id);
    $validated = $request -> validate($this -> getValidationRules());
    $match -> update($validated);
    return redirect() -> route('singleMatch', $match -> id);
    }

    public function deleteMatchFunction($id) {
        $match = MyMatch::findOrFail($id);
        $match -> delete();
        return redirect() -> route('home');
    }
}
