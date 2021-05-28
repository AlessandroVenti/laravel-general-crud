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
               <form method="POST" action="{{route('updateMatch', $match -> id) }}">
               @csrf
               @method('POST')
                    <input type="text" value="{{$match -> team1}}" name="team1"placeholder="team1">
                    <input type="text" value="{{$match -> team2}}" name="team2" placeholder="team2">
                    <input type="text" value="{{$match -> point1}}" name="point1" placeholder="point1">
                    <input type="text" value="{{$match -> point2}}" name="point2"placeholder="point2">
                    <input type="text" value="{{$match -> result}}" name="result"placeholder="result">
                    <input type="submit" value="create">
               </form>
          </main>
     @endsection