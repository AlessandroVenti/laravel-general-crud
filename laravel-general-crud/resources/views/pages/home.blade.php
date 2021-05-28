@extends('layouts.main-layout')
@section('content')
     <main>
          
          <ul class="home">
               @foreach ($matches as $match)
                    <li>
                         <a href="{{ route('singleMatch', $match -> id )}}">
                              {{ $match -> team1 }} <span>vs</span> {{ $match -> team2 }}
                         </a>
                         <a href="{{route('editMatch', $match -> id)}}">
                              &#9998;
                         </a>
                         <a href="{{route('deleteMatch', $match -> id)}}">
                              &#10060;
                         </a>
                    </li>
               @endforeach
               </ul>

               <div>
                    <button>
                         <a href="{{ route('createMatch') }} ">
                              Crea
                         </a>
                    </button>
               </div>
     </main>
@endsection