<div id="change_technician" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Change Technician</h4>
            </div>
             <form  action="{{route('supervisor.change_technician')}}" method="POST">
                {{csrf_field()}}
            <div class="modal-body">
                  <div class="form-group">
                    <label for="tester" class="col-form-label">Select Technician:</label>
                    <input type="hidden" name="id" value="">
                    <select class="form-control col-sm-4" id="tester" name="technician_id" required>
                        
                        @foreach($technicians as $technician)

                        <option value="{{$technician->id}}">{{$technician->name}}</option>
                        @endforeach
                    </select>
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
