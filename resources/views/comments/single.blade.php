@extends('layouts.app') 

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $comment->name }}</div>
            <div class="panel-body">
                {{ $comment->content }}
            </div>
        </div>
    </div>
</div>

@endsection