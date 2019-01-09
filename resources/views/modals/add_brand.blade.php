2<div id="brand_list" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Add Brand</h4>
            </div>
        <form id="addBrand" action="{{route('stock.brand.store')}}" method="POST">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Brand</label>
                            <input type="text"  id="name" class="form-control" name="name" value="{{old('name')}}"/><span class="text-danger"></span>
                        </div>
                    </div>
                    
                </div>            
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" type="button" id="addBrandBtn">
                    <i class="icon icon-check-circle"></i> Submit
                </button>
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    <i class="icon icon-times-circle"></i> Cancel
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
