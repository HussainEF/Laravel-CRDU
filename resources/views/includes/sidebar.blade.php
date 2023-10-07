<div class="min-vh-100 pt-2 pb-2 ps-4 pe-3">
    <h3 class="mb-4 ms-5 me-5 blueish-color">Polls Hoistory</h3>
    @foreach($polls as $polldata)
        <div class="row mb-2">
            <a onclick="pollData('poll-data', {{$polldata->id}})" class="col-md-12 rounded sidebar-question-link p-2">
                {{ csrf_field() }}
                <div class="d-flex justify-content-start">
                    {{$polldata->question}}
                </div>
                <div class="d-flex justify-content-end">
                    {{$polldata->created_at}}
                </div>
            </a>
        </div> 
    @endforeach
</div>