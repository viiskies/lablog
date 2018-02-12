@extends('layouts.app')

@section('content')
    
    <div class="col-xl-6">
        <form method="post" action="{{ route('posts.store') }}">
            {!! csrf_field() !!}
            {{--  {!! method_field('PUT') !!}  --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="title">Content</label>
                <textarea type="text" name="content" class="form-control" id="content" placeholder="Blog content goes here...">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>

@endsection