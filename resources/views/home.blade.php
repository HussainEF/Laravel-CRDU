@extends('layouts.default')
@section('content')
    <header class="row header">
        @include('includes.header')
    </header>
    <div class="row p-0">
        <div class="col-md-3">
            @include('includes.sidebar')
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6 p-2">
                    <div class="poll-card rounded">
                        <h3 class="poll-title d-flex justify-content-center">Create Polls</h3>
                        <form action="" method="POST" class="p-2">
                            <div class="form-group d-flex flex-column mb-2">
                                <label for="question">Enter the Question?</label>
                                <textarea class="rounded p-2 t-area" name="pollQuestion" id="question" cols="30" rows="5">Please type Question here...</textarea>
                            </div>
                            <div class="form-group d-flex flex-column mb-2">
                                <label for="option1">Option 1.</label>
                                <textarea class="rounded p-2 t-area" name="opt1" id="option1" cols="30" rows="1"></textarea>
                            </div>
                            <div class="form-group d-flex flex-column mb-2">
                                <label for="option2">Option 2.</label>
                                <textarea class="rounded p-2 t-area" name="opt2" id="option2" cols="30" rows="1"></textarea>
                            </div>
                            <div class="form-group d-flex flex-column mb-4">
                                <label for="option3">Option 3.</label>
                                <textarea class="rounded p-2 t-area" name="opt3" id="option3" cols="30" rows="1"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary"><i class="fa-solid fa-plus"></i> Add Options</button>
                            </div>
                            <div class="form-group d-flex justify-content-end mb-2">
                                <button class="btn btn-style me-2">Save Poll</button>
                                <button class="btn btn-style">Refresh</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
    <footer class="row bg-secondary d-flex justify-content-end">
        @include('includes.footer')
    </footer>
@endsection