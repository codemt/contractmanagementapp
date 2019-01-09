@extends('layouts.master')

@section('page-content')
    <div class="title-bar">
        <h1 class="title-bar-title">
            <span class="d-ib">Create New Control Specification Form </span>
        </h1>
    </div>
    <div class="row gutter-xs">
        <div class="col-md-12">
            <div class="demo-form-wrapper">
                <form class="form form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="control">Control Type</label>
                        <div class="col-sm-7">
                            <input id="control" class="form-control" type="text">
                        </div>
                        <div class="col-sm-2">
                            <button type="button" id="addType" class="btn btn-sm btn-primary ">
                                <i class="icon icon-plus-circle"></i> Add New Type
                            </button>
                        </div>
                    </div>
                    <div id="addTypeDiv">

                    </div>
                    <div class="col-sm-offset-9">
                        <button type="button" name="" class="btn btn-outline-primary">
                            <i class="icon icon-paper-plane"></i> Submit Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('page-script')
    <script type="text/javascript">

    let count = 0;
    $('#addType').click(function(){
        $('#addTypeDiv').append(`

            <div class="form-group" style="background:#e8eaf1;padding:5px 0">
            <label class="col-sm-2 col-md-offset-1 control-label">Type</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Enter Type Name" required="" name="data[`+(count)+`][]">
            </div>
            <div class="col-sm-1">
            <button type="button" id="addType" class="btn btn-sm btn-success addAttibute" data-count='`+(count++)+`'>
            <i class="icon icon-plus-circle"></i> Add Attibute
            </button>
            </div>
            <div class="col-sm-1">
            <button type="button" class="btn btn-sm btn-danger m-t-20 ">
            <i class="icon icon-times-circle"></i> Remove
            </button>
            </div>
            <div class="clearfix"></div>
            </div>
            `);
        })

        $(document).on('click','.btn-danger',function(){
            $(this).closest('.form-group').remove();
        });

        $(document).on('click','.addAttibute',function(){
            $attributeDiv = $(this).parent().parent();
            let data_count = $(this).data('count');
            $attributeDiv.append(`

                <div class="form-group" style="background:#f5f5f5;margin-top:5px">
                <label class="col-sm-2 col-md-offset-2 control-label">Attribute</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Enter Attribute Name" required="" name="attribute[`+data_count+`][]">
                </div>
                <div class="col-sm-2 has-success">
                <select name="attribute_type[`+data_count+`][]" class="form-control input-sm" required>
                <option selected disabled>Attribute Type</option>
                <option value="checkbox"> &#x2611; <i class="fa fa-home"></i> Checkbox</option>
                <option value="text"> &#x2631; Text</option>
                </select>
                </div>
                <div class="col-sm-1">
                <button type="button" class="input-sm btn btn-danger m-t-20 ">
                <i class="icon icon-times-circle"></i>
                </button>
                </div>
                </div>
                `);
            });

            </script>
        @endpush
