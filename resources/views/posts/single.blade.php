@extends('layouts.app')

@section('content')

    <h2>{{ $post->title }}</h2>
    <h4>{{ $post->date }}</h4>
    <p>{{ $post->content }}</p>


    @include('comments.single')



@endsection