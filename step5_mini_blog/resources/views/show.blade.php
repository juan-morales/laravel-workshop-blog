@extends("master")
@section("content")
        <div class="content">
            <div class="publicacion">
                <div style="float: right;">
                    <a href="{{ route("main") }}" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Back </a>
                    <a href="{{ route("posts-edit", ["id" => $post->id ]) }}" class="btn btn-success"><i class="fa fa-pen"></i> Edit </a>
                    <form method="POST" action="{{ route("posts-delete", ["id" => $post->id ]) }}" style="display:inline;">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-warning"><i class="fa fa-times"></i> Delete </button>
                    </form>
                </div>

                <div class="titulo">
                    <h1>{{ $post->title }}</h1>
                    <h5>by {{ $post->user_id }}</h5>
                </div>

                <div class="estadistica">
                    <span><i class="fa fa-eye"></i> Visits: {{ $post->visits }}</span> <br/>
                    <span><i class="fa fa-calendar"></i> Published: {{ $post->created_at }}</span><br/>
                </div>

                <div class="contenido">
                    <p>
                    {{ $post->body }}
                    </p>
                </div>

                <div class="mi-comentario">
                    <form action="{{ route("comments-store") }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="post_id" value="{{ $post->id }}" hidden>
                            <label for="comment">Your comment (Max. 200 characters)</label>    
                            <textarea rows="3" name="message" id="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Send</button>
                    </form>
                </div>

                <div class="comentarios">
                    <p>Comments:</p>
                    <ul class="list-unstyled">
                        @foreach ($post->comments as $comment)
                        <li class="media item-comentario">
                            <div class="media-body ml-3">
                                <h5 class="mt-0">-</h5>
                                <i>
                                {{ $comment->message }}
                                </i>
                                <br/>
                                <div class="media-footer">
                                    <span title="Published"><i class="fa fa-calendar"></i> Published: {{ $comment->created_at }} </span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection