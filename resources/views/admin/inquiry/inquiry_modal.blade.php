<div id="editModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update {{ $page_title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" data-parsley-validate>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="required-input">Sender</label>
                                <input type="text" class="form-control" id="sender_edit" name="sender_edit"
                                    placeholder="Sender" tabindex="1" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label class="required-input">Title</label>
                                <input type="text" class="form-control" id="title_edit" name="title_edit"
                                    placeholder="First Name" tabindex="1" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Message</label>
                                <textarea disabled class="form-control" id="message_edit" name="message_edit" placeholder="Message" tabindex="2" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Remarks</label>
                                <textarea class="form-control" id="remarks_edit" name="remarks_edit" placeholder="Remarks" tabindex="2" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btnUpdate">Save changes</button>
            </div>
        </div>

    </div>

</div>
