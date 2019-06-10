@extends("master")
@section("content")
<div class="content">
    <!-- BUTTON - NEW POST -->
    <div style="margin-bottom: 80px;">
        <a href="{{ route("posts-create") }}" class="btn btn-danger" style="float: right;">New Post <i class="fa fa-plus-square"></i></a>
    </div>
    <!-- END BUTTON - NEW POST -->
    <!-- LIST OF POSTS -->
    <ul class="list-unstyled">
        @foreach ($posts as $post)
        <a href="{{ route("posts-show", ["id" => $post->id]) }}">
        <li class="media item-publicacion">
            <img class="mr-3" src="{{ asset("logo.png") }}" alt="Generic placeholder image" height="30">
            <div class="media-body">
                <h5 class="mt-0">{{ $post->title }}</h5>
                {{ $post->body }}
                <br/>
                <div class="media-footer">
                    <span title="Visits"><i class="fa fa-eye"></i> {{ $post->visits }} </span>&nbsp
                    <span title="Comments"><i class="fa fa-comment"></i> {{ $post->comments->count() }} </span> &nbsp
                    <span title="Publish date"><i class="fa fa-calendar"></i> Published: {{ $post->created_at }} </span>
                </div>
            </div>
        </li>
        </a>
        @endforeach
    </ul>
    <!-- END LIST OF POSTS -->
</div>
@endsection