<div class="row justify-content-md-center my-5">
    <div class="col-xl-6">
        <form method="post" action="{{ route('comments.store', [ 'post_id' => $post->id ]) }}">
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label for="cname">Your name</label>
                <input type="text" name="cname" class="form-control" id="cname" placeholder="Your name" value="{{ old('cname') }}">
            </div>
            
            @if ($errors->get('cname'))
                @foreach ($errors->get('cname') as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach 
            @endif
            
            <div class="form-group">
                <label for="content">Your comment</label>
                <textarea type="text" name="content" class="form-control" id="content" placeholder="Your comment...">{{ old('content') }}</textarea>
            </div>
            
            @if ($errors->get('content')) 
                @foreach ($errors->get('content') as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach 
            @endif
            
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
</div>