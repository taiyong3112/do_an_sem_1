@extends('layouts.main')

@section('main')

<div class="account-main">
    <div class="container">
        <div class="row">
            <div class="login-main">
                <h1 class="text-center">Login</h1>
                <div class="col-md-5 login-social">
                    <div class="social-title">Login Using Social Account</div>
                    <a href="" class="btn btn-block btn-social btn-facebook">
                        <span class="fab fa-facebook-f"></span> Login using Facebook
                    </a>
                    <a href="" class="btn btn-block btn-social btn-google">
                        <span class="fab fa-google"></span></i> Login using Google
                    </a>
                </div>
                <div class="col-md-7 login-form">
                    <form action="" method="POST" role="form">
                
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="" id="input" value="">
                                        Remember Account
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pull-right fg-pass">
                            <a data-toggle="modal" href='#modal-id'>Forgot Your Password ?</a>
                        </div>

                        <a href="" type="submit" class="btn btn-primary">Login</a>
                        <a href="{{route('index')}}" type="submit" class="btn btn-danger">Cancel</a>
                    </form>
                    <h5>Doesn't have an Account? <a href="{{route('register')}}">Register Now</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade forgot-pass-modal" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Retrieve Password</h4>
            </div>
            <div class="modal-body">
                <h5>Please enter the email address that have been registered</h5>
                <form action="" method="POST" class="form-inline" role="form">
                
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@stop