@extends('layouts.master')


@section('title')
   ALL TEAMS
@endsection

@section('content')

@foreach ($teams as $team)

<h3><a href="{{ 'teams/ '. $team->id }}"> {{ $team->name }}  </a>  </h3>
    
@endforeach

    

@endsection





