@layout('login.layout')

@section('head')
    <script scr="js/login/register.js"></script>
@endsection

@section('content')
    <div id="login" class="col-sm-8">
        <div class="row" id="notify">

        </div>

        <div class="row" id="login-form">
            <div class="container small-540">
                <h3 class="bottom-35 color-blue">Sign-in form</h3>

                <form class="form-horizontal" action="/login" method="post">
                    <div class="form-group">
                        <label class="col-md-4">Login</label>
                        <div class="col-md-8">
                            <input name="username" type="text" role="textbox" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Password</label>
                        <div class="col-md-8">
                            <input name="password" type="password" role="textbox" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="pull-right col-md-3">
                            <input type="submit" class="btn-primary form-control" value="Sign in" />
                        </div>
                        <div class="pull-right col-md-3">
                            <a class="btn-primary form-control btn" href="{{URL::to_route('register')}}">Register</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        <div class="row" id="footer">

        </div>

    </div>
@endsection