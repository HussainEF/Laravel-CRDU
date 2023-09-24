@extends('layouts.default')
@section('content')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-5">
            <form action="{{url('post-login')}}" method="POST" class="bg-light pt-2 ps-3 pe-3 pb-2 rounded" name="loginForm" id="login">
                {{ csrf_field() }}
                <h1 class="d-flex justify-content-center mb-5">Laravel Crud</h1>
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>    
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-3">
                    <div class="col-md-4">
                        <button type="submit" class="form-control btn btn-secondary">Login</button>
                    </div>
                </div>
            </form>
            <div class="row mt-3">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="me-2">Dont Have an Account?</div> 
                    <a href="/register" class="btn btn-primary">Register</a> 
                </div>
            </div>
        </div>
    </div>
@endsection