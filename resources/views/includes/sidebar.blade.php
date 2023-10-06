<div class="min-vh-100 pt-2 pb-2 ps-4 pe-3">
    <h3 class="mb-4 ms-5 me-5">Polls Hoistory</h3>
    @foreach($polls as $polldata)
        <a href="" class="link">
            <div class="row mb-2">
                <div class="col-md-12 rounded poll-question-card p-2">
                    <div class="d-flex justify-content-start custome-color">
                        {{$polldata->question}}
                    </div>
                    <div class="d-flex justify-content-end custome-color">
                        {{$polldata->created_at}}
                    </div>
                </div>
            </div> 
        </a>
    @endforeach
</div>