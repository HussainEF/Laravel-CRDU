@extends('layouts.default')
@section('content')
    <div class="row d-flex justify-content-center mt-5 blueish-color">
        <div class="col-md-5">
            <form action="{{url('post-login')}}" method="POST" class="login-form pt-2 ps-3 pe-3 pb-2 rounded" name="loginForm" id="login">
                {{ csrf_field() }}
                <h1 class="d-flex justify-content-center mb-5">Polling System</h1>
                <div class="row mb-3">
                    <div class="col-md-12 input-group">
                        <span class="input-group-text blueish-color"><label for="email"><i class="fa-solid fa-envelope"></i></label></span>
                        <input type="email" id="email" class="form-control inputbox-style" name="email" placeholder="name@example.com">
                    </div>    
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 input-group">
                        <span class="input-group-text blueish-color"><label for="password"><i class="fa-solid fa-key"></i></label></span>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-3">
                    <div class="col-md-4">
                        <button type="submit" class="form-control btn btn-style"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
                    </div>
                </div>
            </form>
            <div class="row mt-3">
                <div class="col-md-12 d-flex justify-content-center align-items-baseline">
                    <div class="me-2">Dont Have an Account?</div> 
                    <a href="/register" class="btn btn-style"><i class="fa-solid fa-user-plus"></i> Register</a> 
                </div>
            </div>
        </div>
    </div>
@endsection