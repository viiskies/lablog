<div class="row">

    @foreach($comments as $comment)
    <div class="col-md-6">
        <div class="card">
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