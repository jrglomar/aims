{{-- CREATE FORM --}}
<div class="row">
    <div class="col-md-12 collapse" id="create_card">
        <div class="card card-dark">
            <div class="card-header">
                <h4> <span id="create_card_title">New</span> {{ Str::singular($page_title); }}</h4>
            </div>

            <form id="registerForm" data-parsley-validate>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="required-input">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                tabindex="1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="required-input">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                placeholder="First Name" tabindex="1" required>
                        </div>
                        {{-- <div class="form-group col-md-4">
                            <label class="required-input">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name"
                                placeholder="Middle Name" tabindex="1">
                        </div> --}}
                        <div class="form-group col-md-6">
                            <label class="required-input">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                placeholder="Last Name" tabindex="1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="required-input">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" tabindex="1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="required-input">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Password Confirmation" tabindex="1"
                                required>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#create_card"
                        id="create_cancel_btn">Cancel <i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-primary ml-1" id="create_btn">Create <i
                            class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- END OF CREATE FORM --}}
