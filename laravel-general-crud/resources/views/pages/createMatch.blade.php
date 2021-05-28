@extends('layouts.main-layout')

     @section('content')
          <main>
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div>
               @endif

               <form method="POST" action="{{ route('storeMatch') }}">
               @csrf
               @method('POST')
                    <input type="text" name="team1"placeholder="Team1">
                    <input type="text" name="team2" placeholder="Team2">
                    <input type="number" name="point1" placeholder="Point1">
                    <input type="number" name="point2"placeholder="Point2">
                    <input type="number" name="result"placeholder="Result">
                    <input type="submit" placeholder="CREATE">
               </form>
          </main>
     @endsection