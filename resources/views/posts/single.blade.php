@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center mt-5">
    <div class="col-8">
        <h2>{{ $post->title }}</h2>
    </div>
    <div class="col-2">
        <h4>{{ $post->date }}</h4>
    </div>
    <div class="col-10">
        <p>{!! $post->content !!}</p>
    </div>
</div>

@include('partials.comments')

@include('comments.form')
@endsection