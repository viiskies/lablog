@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <form>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="title">Content</label>
                <textarea type="text" class="form-control" id="content" placeholder="Your blog content goes here..."></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
</div>




@endsection