<div id="editModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit {{ $page_title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" data-parsley-validate>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label class="required-input">Email</label>
                                <input type="email" class="form-control" id="email_edit" name="email_edit"
                                    placeholder="Email" tabindex="1" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Role</label>
                                <select class="form-control" id="role_edit" name="role_edit">
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="required-input">First Name</label>
                                <input type="text" class="form-control" id="first_name_edit" name="first_name_edit"
                                    placeholder="First Name" tabindex="1" required>
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label class="required-input">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name_edit" name="middle_name_edit"
                                    placeholder="Middle Name" tabindex="1">
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label class="required-input">Last Name</label>
                                <input type="text" class="form-control" id="last_name_edit" name="last_name_edit"
                                    placeholder="Last Name" tabindex="1" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="required-input">Status</label>
                                <select class="form-control" id="status_edit" name="status_edit">
                                    <option value="Inactive">Inactive</option>
                                    <option value="Active">Active</option>
                                </select>
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
