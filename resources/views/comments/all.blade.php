@extends('layouts.app') 
@section('content')

<div class="row">

    @foreach($comments as $comment)
    <div class="col-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Commenter: <strong>{{ $comment->name }}</strong></div>
            <div class="panel-body">
                {{ $comment->content }}
            </div>
        </div>
    </div>
    @endforeach


</div>

@endsection