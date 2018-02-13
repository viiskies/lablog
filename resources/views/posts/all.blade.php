@extends('layouts.app')

@section('content')

<div class="row my-3">
    <div class="col-9">
        <h1 class="text-center py-5 display-1">My Laravel blog</h1>
        
        @foreach($posts as $post) 
        <div class="row mb-3" >
            <div class="col-9 offset-md-1 my-3">
                <a href="{{ route('posts.post', ['id' => $post->id]) }}">
                    @if ($loop->iteration % 2 == 0)
                        <h2 class="text-success">{{ $post->title }}</h2>
                    @else
                        <h2>{{ $post->title }}</h2>
                    @endif
                </a>
            </div>
            <div class="col my-3">
                <h6>{{ $post->date }}</h6>
            </div>
            <div class="col offset-md-1">
                <p>{!! \Illuminate\Support\Str::words($post->content, 100,'....<a href="/post/' . $post->id .'">Skaityti daugiau</a>') !!}</p>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="{{ route('posts.post', ['id' => $post->id]) }}" 
                                    class="btn btn-info btn-sm" role="button" aria-disabled="true">
                Skaityti daugiau
            </a>

        </div>
        <hr />
        @endforeach
        <div class="row justify-content-md-center mt-3">
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
        
    </div>
    
    <div class="col">
        <h2 class="my-3 display-3">Sidebar</h2>
        <ul>
            <li>
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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