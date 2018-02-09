<div class="row">

    @foreach($comments as $comment)
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Commenter:
                <strong>{{ $comment->name }}</strong>
            </div>
            <div class="panel-body">
                {{ $comment->content }}
            </div>
        </div>
    </div>
    @endforeach

</div>