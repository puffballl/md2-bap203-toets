@extends('layouts.master')

<?php

    $links = App\Link::all();
?>
@section('content')
@foreach($links as $link)
    <a href="{{$link->url}}">{{$link->title}} </a>
    <br>
@endforeach

@endsection
