<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="height: 10vh">
                    <div class="card-header-action d-flex justify-content-between">
                        <h4>List of Inquiries</h4>
                        <div class="justify-content-end">
                            <div class="float-right">
                                <div class="btn-group">
                                    <p class="text-dark pl-3 pr-2 mt-2">Date From: </p>
                                    <label> <input type="date" class="form-control date-range-filter" id="date_from" name="date_from"
                                            placeholder="date" tabindex="1" required>&nbsp;</label>

                                    <p class="text-dark pl-3 pr-2 mt-2">Date To: </p>
                                    <label> <input type="date" class="form-control date-range-filter" id="date_to" name="date_to"
                                            placeholder="date" tabindex="1" required>&nbsp;</label>
                                    &nbsp;
                                    <button id="btnDateReset" class="btn btn-info ml-2 mb-5 pr-3">Reset</button>
                                </div>
                            </div>
                        </div>
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
                                <th>Title</th>
                                <th>Message</th>
                                <th>Remarks</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Created at</th>
                                <th>Date Created</th>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Remarks</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
