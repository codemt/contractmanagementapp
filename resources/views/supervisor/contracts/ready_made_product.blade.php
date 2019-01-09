@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Ready Made Product Stock</span>
        </h1>
    </div>
    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">
                        <button type="button" class="card-action card-toggler" title="Collapse"></button>
                        <button type="button" class="card-action card-reload" title="Reload"></button>
                    </div>
                    <strong>Product List</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                                <th>Product Name</th>
                                <th>Client Name</th>
                                <th>Technician Name</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                              <tr>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->supervisorStockAssign->contract->user->name}}</td>
                                    <td>{{$product->supervisorStockAssign->technician->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('page-script')

@endpush
