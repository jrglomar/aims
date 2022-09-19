<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-action d-flex justify-content-between">
                        <h4>List of {{ $page_title }}</h4>
                        <div class="justify-content-end">
                            <div class="float-right">
                            </div>
                        </div>
                        <button class="btn btn-primary mb-5" type="button" data-toggle="collapse"
                            data-target="#create_card" aria-expanded="false" aria-controls="create_card">New
                            {{ Str::singular($page_title) }} <i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-3 justify-content-start">
                        <div id="dt_btn_div">
                        </div>
                    </div>

                    <table class="table table-hover table-sm" id="dataTable" style="width:100%">
                        <thead>
                            <tr class="bg-info text-light">
                                <th class="not-export-column">ID</th>
                                <th class="not-export-column">Created at</th>
                                <th>Date Created</th>
                                <th>Name</th>
                                <th>Assigned Inventory</th>
                                <th class="text-center not-export-column">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Created at</th>
                                <th>Date Created</th>
                                <th>Name</th>
                                <th>Assigned Inventory</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
