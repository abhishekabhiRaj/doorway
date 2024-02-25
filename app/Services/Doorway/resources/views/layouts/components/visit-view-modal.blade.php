<!-- Modal -->
<div class="modal fade" id="visit-view-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Visitor Detail</h1>
                <button type="button" class="btn bg-white " data-bs-dismiss="modal" aria-label="Close"> <i
                        class="bi bi-x-lg"></i> </button>
            </div>
            <div class="modal-body p-5">
                <div id="visitor-detail-modal">
                    {{--  --}}
                    <div>
                        <section class="d-flex align-items-center ">
                            <img width="100px" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" />
                            <h4 class="m-0 ms-2">Abhishek Raj</h4>
                        </section>
                        <section class="row mt-4">
                            <div class="col-md-12">
                                <ul>
                                    <li><span class="key">Person To Meet</span> : <span class="value">Value</span></li>
                                    <li><span class="key">Date of Visit</span> : <span class="value">Value</span></li>
                                    <li><span class="key">Purpose</span> : <span class="value">Value</span></li>

                                </ul>
                            </div>
                        </section>
                    </div>
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
</div>
