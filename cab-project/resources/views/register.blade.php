@extends('layout.login')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
    </div>
    <form class="user" method="POST" action="">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input name="full_name" class="form-control form-control-user" id="exampleFirstName"
                    placeholder="Full Name">
            </div>
        </div>
        <div class="form-group">
            <input name="email" class="form-control form-control-user" id="exampleInputEmail"
                placeholder="Email Address">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input name="password" class="form-control form-control-user"
                    id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
                <input name="password" type="password" class="form-control form-control-user"
                    id="exampleRepeatPassword" placeholder="Repeat Password">
            </div>
        </div>
        <button class="btn btn-primary btn-user btn-block">
            Register Account
        </button>
        <hr>
        <a href="index.html" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Register with Google
        </a>
        <a href="index.html" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
        </a>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="forgot-password.html">Forgot Password?</a>
    </div>
    <div class="text-center">
        <a class="small" href="{{ url('login') }}">Already have an account? Login!</a>
    </div>
</div>
@endsection