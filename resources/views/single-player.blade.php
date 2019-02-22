@extends('layouts.master')


@section('title')
   SINGLE PLAYER
@endsection

@section('content')

<H1> {{ $player->first_name }}   {{ $player->last_name }}</H1>

<br>
{{ $player->email }}
<br>
{{ $player->team->name }}
    

@endsection

