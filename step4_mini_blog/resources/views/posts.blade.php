@extends("master")
@section("content")
<div class="content">
    <!-- BUTTON - NEW POST -->
    <div style="margin-bottom: 80px;">
        <a href="create.html" class="btn btn-danger" style="float: right;">New Post <i class="fa fa-plus-square"></i></a>
    </div>
    <!-- END BUTTON - NEW POST -->
    <!-- LIST OF POSTS -->
    <ul class="list-unstyled">
        <!-- SINGLE POST -->
        <a href="post.html">
        <li class="media item-publicacion">
            <img class="mr-3" src="logo.png" alt="Generic placeholder image" height="30">
            <div class="media-body">
                <h5 class="mt-0">Post</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <br/>
                <div class="media-footer">
                    <span title="Visits"><i class="fa fa-eye"></i> 100 </span>&nbsp
                    <span title="Comments"><i class="fa fa-comment"></i> 10 </span> &nbsp
                    <span title="Publish date"><i class="fa fa-calendar"></i> Published: 2019-01-01 13:10:01 </span>
                </div>
            </div>
        </li>
        </a>
        <!-- END SINGLE POST -->

        <a href="post.html">
        <li class="media item-publicacion">
            <img class="mr-3" src="logo.png" alt="Generic placeholder image" height="30">
            <div class="media-body">
                <h5 class="mt-0">Post</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <br/>
                <div class="media-footer">
                    <span title="Visits"><i class="fa fa-eye"></i> 100 </span>&nbsp
                    <span title="Comments"><i class="fa fa-comment"></i> 10 </span> &nbsp
                    <span title="Publish date"><i class="fa fa-calendar"></i> Published: 2019-01-01 13:10:01 </span>
                </div>
            </div>
        </li>
        </a>

        <a href="post.html">
        <li class="media item-publicacion">
            <img class="mr-3" src="logo.png" alt="Generic placeholder image" height="30">
            <div class="media-body">
                <h5 class="mt-0">Post</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <br/>
                <div class="media-footer">
                    <span title="Visits"><i class="fa fa-eye"></i> 100 </span>&nbsp
                    <span title="Comments"><i class="fa fa-comment"></i> 10 </span> &nbsp
                    <span title="Publish date"><i class="fa fa-calendar"></i> Published: 2019-01-01 13:10:01 </span>
                </div>
            </div>
        </li>
        </a>
    </ul>
    <!-- END LIST OF POSTS -->
</div>
@endsection