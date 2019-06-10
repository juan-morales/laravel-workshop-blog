@extends("master")
@section("content")
        <div class="content">
            <div class="publicacion">
                <div style="float: right;">
                    <a href="index.html" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Back </a>
                    <a href="edit.html" class="btn btn-success"><i class="fa fa-pen"></i> Edit </a>
                    <form method="POST" action="" style="display:inline;">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-times"></i> Delete </button>
                    </form>
                </div>

                <div class="titulo">
                    <h1>Post</h1>
                    <h5>by Juan Carlos Morales</h5>
                </div>

                <div class="estadistica">
                    <span><i class="fa fa-eye"></i> Visits: 100</span> <br/>
                    <span><i class="fa fa-calendar"></i> Published: 2018-01-01 13:00:00</span><br/>
                </div>

                <div class="contenido">
                    <p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>

                <div class="mi-comentario">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="comment">Your comment (Max. 200 characters)</label>    
                            <textarea rows="3" name="comment" id="comment" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Send</button>
                    </form>
                </div>

                <div class="comentarios">
                    <p>Comments:</p>
                    <ul class="list-unstyled">
                        <li class="media item-comentario">
                            <div class="media-body ml-3">
                                <h5 class="mt-0">User 1</h5>
                                <i>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </i>
                                <br/>
                                <div class="media-footer">
                                    <span title="Published"><i class="fa fa-calendar"></i> Published: 2019-01-01 13:10:01 </span>
                                </div>
                            </div>
                        </li>
                        <li class="media item-comentario">
                            <div class="media-body ml-3">
                                <h5 class="mt-0">User 1</h5>
                                <i>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </i>
                                <br/>
                                <div class="media-footer">
                                    <span title="Published"><i class="fa fa-calendar"></i> Published: 2019-01-01 13:10:01 </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection