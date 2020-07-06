@extends('layouts.main')

@section('main')

<div class="account-main">
    <div class="container">
        <div class="row">
            <div class="register-main">
                <h1 class="text-center">Register</h1>
                <div class="col-md-5 register-social">
                    <div class="social-title">Login Using Social Account</div>
                    <a href="" class="btn btn-block btn-social btn-facebook">
                        <span class="fab fa-facebook-f"></span> Login using Facebook
                    </a>
                    <a href="" class="btn btn-block btn-social btn-google">
                        <span class="fab fa-google"></span></i> Login using Google
                    </a>
                </div>
                <div class="col-md-7 register-form">
                    <form action="" method="POST" role="form">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <a href="" type="submit" class="btn btn-primary">Register</a>
                        <a href="{{route('index')}}" type="submit" class="btn btn-danger">Cancel</a>
                    </form>
                    <h5>Already have an Account? <a href="{{route('login')}}">Login Now</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>

@stop