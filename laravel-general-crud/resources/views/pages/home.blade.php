@extends('layouts.main-layout')
@section('content')
     <main>
         <ul>
              @foreach ($matches as $match)
                  <li>
                       <a href="{{ route('singleMatch', $match -> id )}}">
                         {{ $match -> team1 }} VS {{ $match -> team2 }}
                       </a>
                       <a href="{{route('editMatch', $match -> id)}}">
                         &#9998;
                       </a>
                       <a href="{{route('deleteMatch', $match -> id)}}">
                         &#10060;
                       </a>
                  </li>
              @endforeach

              <button>
                   <a href="{{ route('createMatch') }} ">
                        Crea
                   </a>
              </button>
         </ul>
     </main>
@endsection