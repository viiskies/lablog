@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-9">
    <h1 class="text-center">My Laravel blog</h1>
    @foreach($posts as $post)
    
    <div class="row">
        <div class="col-9">
            @if ($loop->iteration % 2 == 0)
                <a href="/post/{{ $post->id }}">
                    <h2 class="text-success">{{ $post->title }}</h2>
                </a>
            @else
                <a href="/post/{{ $post->id }}">
                    <h2>{{ $post->title }}</h2>
                </a>
            @endif
        </div>
        <div class="col-3">
            <h4>{{ $post->date }}</h4>
        </div>
        <div class="col">
            <p>{!! $post->content !!}</p>
            <hr />
        </div>
    </div>
    
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </li>
        <li>
            <h4>Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, ratione.</p>
        </li>
    </ul>
</div>
@endsection
</div>