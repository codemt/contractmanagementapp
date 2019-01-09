<div id="stock_list" role="dialog" class="modal in">
        <div class="modal-dialog modal-md">
            <div class="modal-content animated bounceInDown">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Add IC Stock</h4>
                </div>
            <form id="add-quantity-form" method="POST" action="/ic/addQuantity">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="alert alert-danger errors" style="display:none"><p>Errors:</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="demo-select2-1" class="form-label">Product</label>
                                <select id="demo-select2-1" class="form-control required" name="product" required="required">
                                    <option value="" selected="selected" disabled="disabled">Select Product</option>
                                    @isset($ProductStock)
                                    @foreach($ProductStock as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="qauntity" class="form-label">Qauntity</label>
                                <input type="number" min="0" id="qauntity" class="form-control required" name="qty" required>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" id="add-qty">
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
    