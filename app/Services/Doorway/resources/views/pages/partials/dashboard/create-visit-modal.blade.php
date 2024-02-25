<!-- Modal -->
<div class="modal fade" id="create-gate-pass-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Create Gate Pass</h1>
                <button type="button" class="btn bg-white " data-bs-dismiss="modal" aria-label="Close"> <i
                    class="bi bi-x-lg"></i> </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="myForm" class="row">
                    @csrf
                    <div class="mb-3 col-md-4">
                        <label for="visitor-name" class="form-label">Visitor Name</label>
                        <input type="text" name="visitor_name" class="form-control" id="visitor_name">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="visitor-mobile" class="form-label">Visitor Mobile</label>
                        <input type="text" name="visitor_mobile" class="form-control" id="visitor_mobile">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="visitor-address" class="form-label">Visitor Address</label>
                        <input type="text" name="visitor_address" class="form-control" id="visitor_address">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="person-to-meet" class="form-label">Person To Meet</label>
                        <input type="text" name="person_to_meet" class="form-control" id="person_to_meet">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="purpose" class="form-label">Purpose</label>
                        <input type="text" name="purpose" class="form-control" id="purpose">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="date-time" class="form-label">Date & Time</label>
                        <input type="date" name="date_time" class="form-control" id="date_time">
                    </div>
                    <p class="m-0 text-danger" id="alert"></p>
                    <div class="mt-2">
                        <button type="button" class="btn btn-secondary text-white "
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="doorway-btn-primary rounded-2 ms-2" id="save-btn">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


