<div id="deduct_stock" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Add New Stock</h4>
            </div>
            <form action="{{route('stock.ProductStock.store')}}" method="POST" id="add_product_form">
            <div class="modal-body">
                <div class="row">
                    <div class="alert alert-danger errors" style="display:none"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product_Name" class="form-label">Client Name</label>
                            <input type="text" id="Product_Name" class="form-control" name="product_name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                            <label for="Product_Name" class="form-label">Phone No</label>
                            <input type="text" id="Product_Name" class="form-control" name="product_name" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Product_Name" class="form-label">Address</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="unit" class="form-label">Date</label>
                            <input type="text" id="unit" class="form-control required" name="unit" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="min-qauntity" class="form-label">Form No.</label>
                            <input type="number" min="0" id="min-qauntity" class="form-control required" name="quantity" required>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" id="add_product_btn">
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
