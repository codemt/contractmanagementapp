@extends('layouts.master')
@push('page-style')
    <style media="all">
    .control-label {
        font-size: 15px;
    }
    .custom-control {
        margin-bottom: 20px;
    }
    .custom-radio .custom-control-indicator {
        -webkit-background-size: 70% 70%;
        background-size: 70% 70%;
    }
    .custom-control-label {
        margin-left: 30px;
        margin-top: 3px;
        font-size: 15px;
        padding-right: 10px;
    }
    .custom-control+.custom-control {
        margin-left: 0px;
    }
    .custom-control-indicator {
        height: 20px;
        width: 20px;
    }
    .md-form-group {
        margin-bottom: 0px;
        padding: 0 0 20px 0;
    }
    .input-sm {
        margin-bottom: 10px;
    }
    [data-type] {
        display: none;
    }

   
</style>
@endpush

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Approved Contract</span>
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
                    <strong>Ready To Assign</strong>
                </div>
                <div class="card-body">
                    <table id="demo-datatables-5" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Contract No.</th>
                                <th>Client Name</th>
                                <th>Control Type</th>
                                <th>Contract Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                        @foreach($contracts as $contract)
                              <tr>
                                    <td>{{$contract->id}}</td>
                                    <td>{{$contract->client_name}}</td>
                                    <td>{{$contract->detail->control_type ?? ''}}</td>
                                    <td>{{$contract->created_at}}</td>
                                    <td>
                                        <a href="{{route('contractPdf',[$contract->id])}}" target="_blank">
                                    <button type="button" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" title="View Contract">
                                        <i class="icon icon-eye"></i>
                                    </button></a>
                                    @if(is_null($contract->supervisorStockAssign))
                                        <button  class="btn btn-xs btn-outline-primary assign_stock"  data-id="{{$contract->id}}"  type="button">
                                            <i class="icon icon-check"></i> Assign Stock
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('modals')
    @include('modals.technician')

    <div id="ControlTakeModal" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header" style="background: #d9230f;color: white">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Assign Stock</h4>

          </div>
          <div class="modal-body" style="overflow: hidden;">
            <form action="{{route('supervisor.assignStock.create')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="contract_id">
               <div class="col-sm-12">
                 <label class="custom-control custom-control-primary custom-radio">
                    <input class="custom-control-input" id="new-controller" type="radio" name="take_control_from" value="Make New Control" checked="checked">
                    <span class="custom-control-indicator" selected="selected"></span>
                    <span class="custom-control-label"> Make new Control</span>
                </label>
                <label class="custom-control custom-control-primary custom-radio">
                    <input class="custom-control-input" id="take_from_stock" type="radio" name="take_control_from" value="Take From Stock">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label"> Take From Stock</span>
                </label>
                <div class="col-sm-offset-2">
                <select class="md-form-control" name="product_id" style="display: none" required="required" disabled="disabled">
                    <option value="" selected="selected" disabled="disabled">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                    @endforeach         
                </select>
            </div>
            <br/>
                </div>
               <div class="text-center">
                   <button class="btn btn-sm btn-outline-primary assign"  type="submit" data-toggle="tooltip" title="Assign Stock" >
                         Assign 
                   </button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
@push('page-script')
   <script type="text/javascript">
       $(document).on('click','.assign_stock',function(e){
        let contract_id = $(this).attr('data-id');
        $('input[name="contract_id"]').val(contract_id);
        $('#ControlTakeModal').modal('show'); 
       });
       $('#ControlTakeModal').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
            $('select[name="product_id"]').hide().prop('disabled',true);
        })
       $('input[name="take_control_from"]').change(function(){
            if($(this).val()== 'Make New Control')
            {
                            $('select[name="product_id"]').hide().prop('disabled',true);

            }
            else{
                        $('select[name="product_id"]').show().prop('disabled',false);

            }
       })
   </script>
@endpush
