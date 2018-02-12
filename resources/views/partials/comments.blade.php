<div class="row justify-content-md-center mt-3">

    @foreach($comments as $comment)
    <div class="col-8 my-3">
        <div class="card p-5">
            <div class="card-title">Commenter:
                <strong>{{ $comment->name }}</strong>
            </div>
            <div class="card-text">
                {{ $comment->content }}
            </div>
        </div>
    </div>
    @endforeach

</div>