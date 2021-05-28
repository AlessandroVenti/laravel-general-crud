@extends('layouts.main-layout')
@section('content')
     <main>
         <ul>
              @foreach ($matches as $match)
                  <li>
                       <a href="{{ route('singleMatch', $match -> id )}}">
                         {{ $match -> team1 }} VS {{ $match -> team2 }}
                       </a>
                  </li>
              @endforeach
         </ul>
     </main>
@endsection