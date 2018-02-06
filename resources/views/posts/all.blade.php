@extends('layouts.app')

@section('content')
    
    <h1 class="text-center">My Laravel blog</h1>

    <div class="col-md-9">
    @foreach($posts as $post)

        @if ($loop->iteration % 2 == 0)
            <a href="/post"><h2 class="text-success">{{ $post->title }}</h2></a>
        @else
            <a href="/post"><h2>{{ $post->title }}</h2></a>
        @endif
            <h4>1999-05-15</h4>
            <p>{{ $post->content }}</p>
            <hr />

    @endforeach
    
</div>
<div class="col">
    <h2>Sidebar</h2>
    <ul>
        <li>
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
        </li>
        <li>
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
        </li>
        <li>
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
        </li>
    </ul>
</div>
@endsection