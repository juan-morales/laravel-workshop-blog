@extends("master")
@section("content")
        <div class="content">
            <div class="publicacion">
                <h3>Edit your Post</h3>
                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="Post">
                    </div>

                    <div class="form-group">
                        <label for="contenido">Body</label>
                        <textarea rows="5" class="form-control" name="body" id="body">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</textarea>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Save <i class="fa fa-check"></i></button>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a style="color:white;" href="index.html" class="btn btn-dark btn-lg btn-block">Cancel <i class="fa fa-ban"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection