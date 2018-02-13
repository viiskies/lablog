@extends('layouts.app')

    @section('content')
    <div class="row justify-content-md-center mt-5">
        <div class="col-6">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="col-2">
            <h4>{{ $post->date }}</h4>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <p>{!! $post->content !!}</p>
        </div>
    </div>
    <div class="row justify-content-md-center mt-5">
        <div class="col-12 text-center">
            <a href="{{ route('posts.edit', ['id' => $post->id]) }}"> Edit post </a> /
            <a href="{{ route('posts.delete', ['id' => $post->id]) }}"> Delete a post </a>
        </div>
    </div>
    @include('partials.comments')
    @include('comments.form')

@endsection