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
[data-type],.other_accessory_qty {
    display: none;
}
</style>
@endpush
@section('page-content')
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success! </strong> {{Session::get('success')}}.
</div>
@endif

<div class="title-bar">
    <h1 class="title-bar-title">
        <span class="d-ib">Basic Requirements</span>
    </h1>
    <p class="title-bar-description">
        <small>
            Please complete the follwoing details <br/>
            <span class="text-primary">
                (*) Mandatory Fields
            </span>
        </small>
    </p>
</div>
<form id="ContractForm" data-toggle="md-validator" action="{{route('contractdetail.store')}}" method="POST">
            {{ csrf_field() }}
    <label class="col-sm-2 control-label" for="client_name">
        Client Name<sup class="text-primary">*</sup>
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            @if(isset($allUser))
            <select name="client_name" id="client_name"  class="md-form-control" required>
                <option value="" selected disabled="disabled">Select Client</option>
                @foreach($allUser as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
            <label class="md-control-label"></label>
            <input type="hidden" value="" name="user_id">
            @else
            <input class="md-form-control" id="client_name" type="text" name="client_name" spellcheck="false" readonly="readonly" value="{{$user->name}}">
            <label class="md-control-label"></label>
            <input type="hidden" value="{{$user->id}}" name="user_id">
            @endif
          
        </div>
    </div>

    <label class="col-sm-2 control-label" for="contact_person">
        Contact Person <sup class="text-primary">*</sup>
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="contact_person" type="text" name="contact_person" spellcheck="false" value="" required>
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="mobile_number">
        Mobile Number <sup class="text-primary">*</sup>
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="mobile_number" type="text" required name="mobile_number" spellcheck="false" value="">
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="email">
        Email Address
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <input class="md-form-control" id="email" type="email" name="email" spellcheck="false" value="{{auth()->user()->email ?? $user->email ?? ''}}" readonly="readonly">
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="office_address">
        Office Address :
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <textarea class="md-form-control" id="office_address" rows="2" name="office_address" ></textarea>
            <label class="md-control-label"></label>
        </div>
    </div>

    <label class="col-sm-2 control-label" for="site_address">
        Site Address :
    </label>
    <div class="col-sm-4">
        <div class="md-form-group md-label-floating">
            <textarea class="md-form-control" id="site_address" rows="2" name="site_address" ></textarea>
            <label class="md-control-label"></label>
        </div>
    </div>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        
            <h3 class="text-center"><u>Control Specification</u></h3>
            <br/>
            <div class="row">
                <label class="col-sm-3 control-label" for="">Choose Control Type <sup class="text-primary">*</sup> :</label>
                <div class="col-sm-9">
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="ARD">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> ARD</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="V3F">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> V3F</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="V3F+ARD">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> V3F + ARD</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="SS">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> SINGLE SPEED</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="SS+ARD">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> SINGLE SPEED + ARD</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="HYDRAULIC">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> HYDRAULIC</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-radio">
                        <input class="custom-control-input" type="radio" name="control_type" value="INTEGRATED">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-label"> INTEGRATED</span>
                    </label>
                </div>
            </div>
            <div data-type="ard">
                @component('component.ard')
                @endcomponent
            </div>
            <div data-type="v3f">
                @component('component.v3f')
                @endcomponent
            </div>
            <div data-type="v3f_ard">
                @component('component.v3f_ard')
                @endcomponent
            </div>
            <div data-type="single_speed">
                @component('component.single_speed')
                @endcomponent
            </div>
            <div data-type="single_speed_ard">
                @component('component.single_speed_ard')
                @endcomponent
            </div>
            <div data-type="hydraulic">
                @component('component.hydraulic')
                @endcomponent
            </div>
            <div data-type="integrated">
                @component('component.integrated')
                @endcomponent
            </div>
        </form>
    </div>
</div>
@endsection

@push('page-script')
<script>

    $('input[type=radio][name=control_type]').change(function() {
        $('[data-type] input[type=radio]').prop( "checked", false );
        switch (this.value) {
            case 'ARD':
            $('[data-type]').hide();
            $('[data-type=ard]').show('slow');
            break;

            case 'V3F':
            $('[data-type]').hide();
            $('[data-type=v3f]').show('slow');
            break;

            case 'V3F+ARD':
            $('[data-type]').hide();
            $('[data-type=v3f_ard]').show('slow');
            break;

            case 'SS':
            $('[data-type]').hide();
            $('[data-type=single_speed]').show('slow');
            break;

            case 'SS+ARD':
            $('[data-type]').hide();
            $('[data-type=single_speed_ard]').show('slow');
            break;

            case 'HYDRAULIC':
            $('[data-type]').hide();
            $('[data-type=hydraulic]').show('slow');
            break;

            case 'INTEGRATED':
            $('[data-type]').hide();
             $('[data-type=integrated]').show('slow');
            break;

            default:
        }
    });

    $('input[type=radio][name=control_type]').change(function() {
        if (this.value == 'GEARLESS') {
            $('input[type=radio][name=drive_details]').change(function() {
                if (this.value == 'Supplied By Us') {
                    $('[data-type=drive_details_by_ics]').hide();
                    $('[data-type=drive_details_by_ics_for_gearless]').hide();
                    $('[data-type=drive_details_by_us]').show();
                    $('[data-type=drive_details_by_ics] input[type=radio]').prop( "checked", false );
                    $('[data-type=drive_details_by_ics_for_gearless] input[type=radio]').prop( "checked", false );
                }
                else if (this.value == 'Take from icon control system') {
                    $('[data-type=drive_details_by_ics]').hide();
                    $('[data-type=drive_details_by_us]').hide();
                    $('[data-type=drive_details_by_ics_for_gearless]').show();
                }
            });
        }
        else {
            $('input[type=radio][name=drive_details]').change(function() {
                if (this.value == 'Supplied By Us') {
                    $('[data-type=drive_details_by_ics]').hide();
                    $('[data-type=drive_details_by_ics_for_gearless]').hide();
                    $('[data-type=drive_details_by_us]').show();
                    $('[data-type=drive_details_by_ics] input[type=radio]').prop( "checked", false );
                    $('[data-type=drive_details_by_ics_for_gearless] input[type=radio]').prop( "checked", false );
                }
                else if (this.value == 'Take from icon control system') {
                    $('[data-type=drive_details_by_ics_for_gearless]').hide();
                    $('[data-type=drive_details_by_us]').hide();
                    $('[data-type=drive_details_by_ics]').show();
                }
            });
        }
    });

    // Door Mode Auto
    $('input[type=radio][name=door_mode]').change(function() {
        if (this.value == 'Auto Door') {
            console.log(this.value);
            $('label[for=rcam_voltage_v3f],label[for=rcam_voltage_v3f_ard]').hide();
            $('input[type=text][name="r_cam_voltage"]').hide();
            $('[data-type=auto_door]').show('slow');
        }
        else if(this.value ==  'Semi Auto' || this.value == 'Manual Door'){
             $('label[for=rcam_voltage_v3f],label[for=rcam_voltage_v3f_ard]').show();
             $('input[type=text][name="r_cam_voltage"]').show();
             $('[data-type=auto_door]').hide();
             $('[data-type=vertical_door]').hide();
             $('[data-type=door_drive]').hide();
             $('input[type=radio][name=door_mode_auto_type]').prop( "checked", false );
             $('input[type=radio][name=door_drive]').prop( "checked", false );
        }
               
    });
    // Vertical Auto Door
    $('input[type=radio][name=door_mode_auto_type]').change(function() {
        if (this.value == 'Vertical Auto Door') {
            $('[data-type=vertical_door]').show('slow');
        }
        else if(this.value == 'Fermater type Auto Door'){
            $('[data-type=vertical_door]').hide();
            $('[data-type=door_drive]').hide();
            $('input[type=radio][name=door_drive]').prop( "checked", false );
        }
    });
    // Door Drive
    $('input[type=radio][name=door_drive]').change(function() {
        if (this.value == 'Yes') {
            $('[data-type=door_drive]').show('slow');
        }
        else {
            $('[data-type=door_drive]').hide();
        }
    });

    //change email based on client selected
    $('select[name="client_name"]').change(function(){

        var id = $(this).val();
        $.ajax({
            url :"{{route('getClientEmail')}}",
            type: "POST",
            data:{id:id},
            success:function(response)
            {
                $('#email').val(response.email);
                $('input[type=hidden][name="user_id"]').val(response.id);
            }
        })
    })

    //disabled all hide input textarea and select field
    $('.btnSubmit').click(function(e){
      e.preventDefault()
      $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr("disabled",true);
       // $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr("disabled",true);
       // if($('#ContractForm').parsley().validate())
       // {
       //      $('#ContractForm').submit();
       // }
       // else
       // {
       //      $('#ContractForm  :input:hidden').not('input[type="hidden"]').attr("disabled",false);
       // } 

       $('#ContractForm').submit();

    })


</script>
@endpush
