<div id="tester_report" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Assign Tester</h4>
            </div>
            <div class="modal-body">
                <table id="demo-datatables-2" class="table table-striped table-nowrap dataTable text-center" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Check Point</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i=0; $i < 3; $i++)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>Car Gate  </td>
                                <td>UP Relay Status</td>
                                <td>
                                    <strong class="text-success text-uppercase">on</strong>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
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
