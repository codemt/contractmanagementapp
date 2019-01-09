<div id="stock_return" role="dialog" class="modal in">
    <div class="modal-dialog modal-md">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Stock List</h4>
            </div>
            <div class="modal-body custom-scrollbar" style="max-height: 450px;overflow-y: scroll;">
                <table id="demo-datatables-2" class="table table-striped table-nowrap dataTable text-center stock-return" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Brand</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Assign</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="product_return[]" value="{{$product->id}}" data-id="{{$product->id}}">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" type="button" id="add-return-product">
                    <i class="icon icon-check-circle"></i> Submit
                </button>
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    <i class="icon icon-times-circle"></i> Cancel
                </button>
            </div>
        </div>
    </div>
</div>
