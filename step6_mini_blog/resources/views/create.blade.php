@extends("master")
@section("content")
        <div class="content">
            <div class="publicacion">
                <h3>Create a new Post</h3>
                <form class="form" action="{{ route("posts-store") }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea rows="5" class="form-control" name="body" id="bodyt"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Save<i class="fa fa-check"></i></button>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a style="color:white;" href="{{ route("main") }}" class="btn btn-dark btn-lg btn-block">Cancel<i class="fa fa-ban"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection