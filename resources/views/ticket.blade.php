@extends('layout')

@section('content')
    <h1>Ticket Number {{$ticket->id}}</h1>

    <h2>{{$ticket->title}}</h2>
@stop
