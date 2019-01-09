<div id="edit_stock" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Edit Stock</h4>
            </div>
            <form action="" method="POST" id="edit_product_form">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="id" value="">
            <div class="modal-body">
                <div class="row">
                    <div class="alert alert-danger errors" style="display:none"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Product_Name" class="form-label">Product Name</label>
                            <input type="text" value=""class="form-control" placeholder="Product name" name="product_name" required>
                            <div style="color: red;">{{ $errors->first('product_name') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="demo-select2-2" class="form-label">Product Category</label>
                            <select id="demo-select2-2" class="form-control required" name="category" required>
                                <option value=""  disabled="disabled">Select Category</option>
                                @isset($categories)
                                @foreach($categories as $category)    
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                            <div style="color: red;">{{ $errors->first('category') }}</div>
                          
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
                            <div style="color: red;">{{ $errors->first('brand') }}</div>

           
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" id="unit" class="form-control required" value="" name="unit" required>
                            <div style="color: red;">{{ $errors->first('unit') }}</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="min-qauntity" class="form-label">Minimunm Quantity</label>
                            <input type="number" min="0" class="form-control required" value="" name="quantity" required>
                            <div style="color: red;">{{ $errors->first('quantity') }}</div>
                        </div>
                    </div> 
                </div>            
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" id="edit_product_btn">
                    <i class="icon icon-check-circle"></i> Update
                </button>
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    <i class="icon icon-times-circle"></i> Cancel
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
