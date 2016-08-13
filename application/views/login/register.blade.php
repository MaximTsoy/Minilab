@layout('login.layout')

@section('content')
    <div id="register">
        <div class="row" id="notify">

        </div>

        <div class="row" id="register-form">
            <div class="container small-720">
                <h3 class="bottom-35 color-blue">Registration form</h3>

                <form class="form-horizontal" action="/register" method="post">
                    <div id="login-group" class="group">
                        <div class="form-group">
                            <label class="col-md-4">Stop-stop wait.. Okay forget</label>

                            <div class="col-md-8">
                                <input name="username" type="text" role="textbox" autocomplete="off"
                                       placeholder="Put your username here" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Now time to imagine.. RedRoseRubbersRabbit</label>

                            <div class="col-md-8">
                                <input name="password" type="text" role="textbox" autocomplete="off"
                                       placeholder="Create your passsword here" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div id="personal-group" class="group">
                        <div class="form-group">
                            <label class="col-md-4">Do you have E-mail ?</label>

                            <div class="col-md-8">
                                <input name="email" type="text" role="textbox" autocomplete="off"
                                       placeholder="Put your e-mail here" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">How we can call you ?</label>

                            <div class="col-md-8">
                                <input name="name" type="text" role="textbox" autocomplete="off"
                                       placeholder="Put your first-name here" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="pull-right col-md-3">
                            <input type="submit" class="btn-primary form-control" value="Sign in"/>
                        </div>
                        <div class="pull-right col-md-3">
                            <a class="btn-primary form-control btn" href="{{URL::to_route('home')}}">Back</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        <div class="row" id="footer">

        </div>

    </div>
@endsection