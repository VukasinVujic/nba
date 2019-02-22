@extends('layouts.master')


@section('title')
    ALL PLAYERS
@endsection

@section('content')

@foreach ($players as $player)
    
    {{ $player->first_name }}
    
    {{ $player->last_name }}
    

    {{ $player->email }}
    <br>
    <hr>    
    @endforeach
   
    

@endsection
