@extends('layouts.app')

@section('content')

    @foreach($posts as $post)

        @if ($loop->iteration % 2 == 0)
            <a href="/post"><h2 class="text-success">{{$post->title}}</h2></a>
        @else
            <a href="/post"><h2>{{$post->title}}</h2></a>
        @endif
            <h4>1999-05-15</h4>
            <p>{{$post->content}}</p>
            <hr />

    @endforeach

@endsection