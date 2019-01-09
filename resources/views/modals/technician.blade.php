<div id="assign_technician" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content  animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Assign Technician</h4>
            </div>
            <div class="modal-body">
                <table id="demo-datatables-2" class="table table-striped table-nowrap dataTable text-center" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Select</th>
                            <th class="text-center">Technician Name</th>
                            <th class="text-center">Running Contract</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i=0; $i < 3; $i++)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </td>
                                <td>ds-115</td>
                                <td>27</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <hr/>
                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" for="Date">Due Date<sup class="text-primary">*</sup></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy">
                        <span class="form-control-feedback" aria-hidden="true">
                            <span class="icon"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="icon icon-check-circle"></i> Submit
                </button>
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    <i class="icon icon-times-circle"></i> Cancel
                </button>
            </div>
        </div>
    </div>
</div>
