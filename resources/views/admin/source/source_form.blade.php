{{-- CREATE FORM --}}
<div class="row">
    <div class="col-md-12 collapse" id="create_card">
        <div class="card card-dark">
            <div class="card-header">
                <h4> <span id="create_card_title">New</span> {{ Str::singular($page_title); }}</h4>
            </div>

            <form id="createForm" data-parsley-validate>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="required-input">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Title" tabindex="1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="required-input">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description" tabindex="2" rows="5"></textarea>
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
