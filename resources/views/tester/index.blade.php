
@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Testing</span>
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
                    <strong>New Products To Testing</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Contract No.</th>
                                <th>Control Type</th>
                                <th>Due Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @isset($testProducts)
                            @foreach($testProducts as $product)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->contract->id}}</td>
                            <td>{{$product->contract->detail->control_type}}</td>
                            <td>{{$product->due_date}}</td>
                            <td>
                                <a href="{{route('technician.test_product',$product->id)}}" class="btn btn-xs btn-outline-primary">
                                    <i class="icon icon-check"></i> Test Product
                                </a>
                            </td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end normal control testing -->
@endsection
