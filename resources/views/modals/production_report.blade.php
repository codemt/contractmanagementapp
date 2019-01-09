<div id="production_report" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Production Report</h4>
            </div>

           

             <form  action="{{route('technician.production_report')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="">
            <div class="modal-body">
                  <div class="form-group">
                    <label for="control_no" class="col-form-label">Control No:</label>
                    <input type="hidden" name="control_id">
                    <input id="control_no" type="text" class="form-control col-sm-6" name="control_no" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="start_date" class="col-form-label">Starting Date of Work:</label>
                     <input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="work_starting_date">
                        <span class="form-control-feedback" aria-hidden="true">
                            <span class="icon"></span>
                        </span>
                </div>
                <div class="form-group">
                    <label for="drive_sr_no" class="col-form-label">If Drive is there mention Sr. No:</label>
                    <input id="drive_sr_no" type="text" class="form-control col-sm-12" name="drive_sr_no" value="">
                </div>
                <div class="form-group">
                    <label for="technical_changes" class="col-form-label">If any Technical Changes mention in below box:</label>
                    <textarea id="technical_changes" class="form-control col-sm-12" name="technical_changes" value=""></textarea>
                </div>
                <div class="form-group">
                    <label for="approved_by" class="col-form-label">Approved By Name:</label>
                    <input id="approved_by" type="text" class="form-control col-sm-6" name="approved_by" value="">
                </div>
                <div class="form-group">
                    <label for="approved_date" class="col-form-label">Approved Date:</label>
                    <input class="form-control" type="text" id="Date" value="" data-provide="datepicker" data-date-today-highlight="true" data-date-autoclose="true" data-date-format="DD, MM d, yyyy" name="approved_date">
                </div>
                <div class="form-group">
                    <label for="product_name" class="col-form-label">Product Serial Number:</label>
                    <input id="product_name" type="text" class="form-control col-sm-6" name="product_name" value=""  placeholder="eg.AB no./dd/mm/yy">
                </div>
                <div class="form-group">
                    <label for="approved_date" class="col-form-label">Remark:</label>
                    <textarea class="form-control"  name="remark"></textarea>
                </div>


            </div>
             
            <div class="modal-footer">
                <button class="btn btn-primary"type="submit">
                    <i class="icon icon-check-circle"></i> Submit
                </button>
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    <i class="icon icon-times-circle"></i> Cancel
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
