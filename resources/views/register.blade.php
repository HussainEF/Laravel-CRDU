@extends('layouts.default')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-5">
        <form action="{{url('post-register')}}" method="POST" class="bg-light pt-2 ps-3 pe-3 pb-2 rounded" name="registerForm" id="register">
            {{ csrf_field() }}
            <h1 class="d-flex justify-content-center mb-5">Laravel Crud</h1>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="email" name="email" class="form-control" placeholder="name@company.com">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="phone" name="contact" class="form-control" placeholder="03000000000">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12 d-flex">
                    <div class="me-4">Gender:-</div>
                    <div class="">
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male" class="me-2">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <lablel for="female" class="me-2">Female</lablel>
                        <input type="radio" id="other" name="gender" value="other">
                        <lablel for="other" class="me-2">Other</lablel>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <button type="submit" class="form-control btn btn-secondary">Register</button>
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="me-2">Already Registered?</div>
                <a href="/login" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
