@extends('main')
@section ('title','|')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <h1>{{ $post->body }}</h1>
        <p>POSted in {{ $post->user->name }} </p>
    </div>


@endsection