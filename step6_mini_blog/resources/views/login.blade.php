@extends("master")
@section("content")
        <div class="content">
            <div class="padding-box">
                <div style="margin-top: 10vh;">
                    <h1>Login</h1>
                </div>

                <div class="login-box border-tl-2">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-12" style="margin-bottom: 5px;">
                                <button type="submit" class="btn btn-danger btn-block">Log me in <i class="fa fa-sign-in-alt"></i></button>
                            </div>
                            <div class="col-12">
                                <a href="index.html" class="btn btn-dark btn-block"><i class="fa fa-arrow-left"></i> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection