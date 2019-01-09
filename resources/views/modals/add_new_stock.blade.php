<div id="new_stock" role="dialog" class="modal in">
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
                {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="alert alert-danger errors" style="display:none"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product_Name" class="form-label">Product Name</label>
                            <input type="text" id="Product_Name" class="form-control" name="product_name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="demo-select2-2" class="form-label">Product Category</label>
                            <select id="demo-select2-2" class="form-control required" name="category" required>
                                <option value="" selected="selected" disabled="disabled">Select Category</option>
                                @isset($categories)
                                @foreach($categories as $category)    
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="demo-select2-3" class="form-label">Brand</label>
                            <select id="demo-select2-3" class="form-control required" name="brand" required>
                                <option value="" selected="selected" disabled="disabled">Select Brand</option>
                                @isset($brands)
                                @foreach($brands as $brand)    
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" id="unit" class="form-control required" name="unit" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="min-qauntity" class="form-label">Minimunm Quantity</label>
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
