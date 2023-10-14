<!--Update Poll Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Poll</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('poll-creation')}}" method="POST" class="p-2">
                {{ csrf_field() }}
                    <div class="form-group d-flex flex-column mb-2">
                        <label for="question">Poll Question?</label>
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-style" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Close</button>
                <button type="button" class="btn btn-style"><i class="fa-regular fa-floppy-disk"></i>  Save Changes</button>
            </div>
        </div>
    </div>
</div>