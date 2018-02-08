@extends('layouts.app')


@section('content') 
<h1 class="text-center">My Laravel blog</h1>

    @foreach($posts as $post)
        @if ($loop->iteration % 2 == 0)
            <a href="/post">
                <h2 class="text-success">{{$post->title}}</h2>
            </a>
        @else
            <a href="/post">
                <h2>{{$post->title}}</h2>
            </a>
        @endif
            <h4>{{ $post->date }}</h4>
            {!! $post->content !!}
            <hr /> 
    @endforeach
@endsection