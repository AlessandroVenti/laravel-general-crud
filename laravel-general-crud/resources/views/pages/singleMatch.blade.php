@extends('layouts.main-layout')
@section('content')
     <main>
         <ul class="singleMatch">
               <li>
                    {{ $match -> team1 }} {{ $match -> point1 }} - {{ $match -> point2 }} {{ $match -> team2 }}
               </li>
         </ul>
     </main>
@endsection