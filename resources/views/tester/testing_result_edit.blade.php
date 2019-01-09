
@extends('layouts.master')

@section('page-content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
     <h3 class="text-center">Testing Department</h3>
     <div></div>
     <form id="testing-form" action="{{route('technician.store_test_product',[$testResult->supervisorStockAssign_id,$testResult->id])}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <label class="col-md-8 control-label" for="control-received">Control Received in testing Department on Date:</label>
            <div class="col-md-4">
               <div class="md-form-group">
                   <input type="text" id="control-received" name="received_date" class="md-form-control" spellcheck="false" value="{{$testResult->received_date}}" readonly>
                   <label class="md-control-label"></label>
               </div>
           </div>
       </div>
       <div class="row">
           <label class="col-md-8 control-label" for="all_component">All Component Sticker, Proper Terminal Sticker, Field Wiring Sticker</label>
           <div class="col-xs-4">
            <label class="custom-control custom-control-primary custom-checkbox">
                <input type="checkbox" name="all_component" class="custom-control-input" value="Yes" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Yes</span>
            </label>           
        </div>
    </div>
    <br>
    <div class="row">
       <label class="col-md-8 control-label" for="all_component">Transformer & Drive Wire Ferules</label>
       <div class="col-xs-4">
        <label class="custom-control custom-control-primary custom-checkbox">
            <input type="checkbox" name="trans_and_drive_features" class="custom-control-input" value="Yes" required>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-label">Yes</span>
        </label>           
    </div>
</div>
<br>
<div class="row">
   <label class="col-md-8 control-label" for="all_component">Main Control Name Sticker & Control Specification Sticker</label>
   <div class="col-xs-4">
    <label class="custom-control custom-control-primary custom-checkbox">
        <input type="checkbox" name="specs_sticker" class="custom-control-input" value="Yes" required>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-label">Yes</span>
    </label>           
</div>
</div>
<br>
<div class="row">
   <label class="col-md-8 control-label" for="all_component">All Parameters Filled in Specification Sticker</label>
   <div class="col-xs-4">
    <label class="custom-control custom-control-primary custom-checkbox">
        <input type="checkbox" name="param_in_sticker" class="custom-control-input" value="Yes" required>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-label">Yes</span>
    </label>           
</div>
</div>
<br>
<div class="row">
   <label class="col-md-8 control-label" for="all_component">Wire tightness Proper</label>
   <div class="col-xs-4">
    <label class="custom-control custom-control-primary custom-checkbox">
        <input type="checkbox" name="wire_proper" class="custom-control-input" value="Yes" required>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-label">Yes</span>
    </label>           
</div>
</div>
<br>
<div class="row">
   <label class="col-md-8 control-label" for="all_component">All PCB's No, Changes Sr. No., Xmer Sr. No., ARD Ann. Sr. No. Check as per metion on page No. 3,ok</label>
   <div class="col-xs-4">
    <label class="custom-control custom-control-primary custom-checkbox">
        <input type="checkbox" name="all_no" class="custom-control-input" required value="Yes">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-label">Yes</span>
    </label>           
</div>
</div>
<br>
<div class="row">
   <label class="col-md-8 control-label" for="all_component">Panel Door & Door Key</label>
   <div class="col-xs-4">
    <label class="custom-control custom-control-primary custom-checkbox">
        <input type="checkbox" name="panel_door_key" class="custom-control-input" required value="Yes">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-label">Yes</span>
    </label>           
</div>
</div>
<br><br>


<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-actions">
        <button type="button" class="card-action card-toggler" title="Collapse"></button>
        <button type="button" class="card-action card-reload" title="Reload"></button>
        <button type="button" class="card-action card-remove" title="Remove"></button>
    </div>
    <strong> <h4>VOLTAGE CHACKING UNDER INSP.</h4></strong>
</div>
<div class="card-body" data-toggle="match-height">
  <table class="table">
    <thead>
      <tr>
        <th>INPUT VOLTAGE</th>
        <th>440V AC</th>
        <th>110V AC</th>
        <th>24V AC</th>
        <th>12V AC</th>
    </tr>
</thead>
<tbody>
  <tr>
    <th>OUTPUT VOLTAGE</th>
    <td>
        <input type="text" id="control-received" name="output_voltage[]" class="md-form-control" placeholder="V AC">
    </td>
    <td>
        <input type="text" id="control-received" name="output_voltage[]" class="md-form-control" placeholder="V AC">
    </td>
    <td>
        <input type="text" id="control-received" name="output_voltage[]" class="md-form-control" placeholder="V AC">
    </td>
    <td>
       <input type="text" id="control-received" name="output_voltage[]" class="md-form-control" placeholder="V AC">
   </td>
</tr>
<tr>
    <th>DC VOLTAGE</th>
    <td>
        <input type="text" id="control-received" name="dc_voltage[]" class="md-form-control" placeholder="V DC">
    </td>
    <td>
        <input type="text" id="control-received" name="dc_voltage[]" class="md-form-control" placeholder="V DC">
    </td>
    <td>
        <input type="text" id="control-received" name="dc_voltage[]" class="md-form-control" placeholder="V DC">
    </td>
    <td>
       <input type="text" id="control-received" name="dc_voltage[]" class="md-form-control" placeholder="V DC">
   </td>
</tr>

</tbody>
</table>
</div>
</div>
<div class="row">
    <label class="col-md-4 control-label" for="remark">Remark</label>
    <div class="col-md-8">
       <div class="md-form-group">
           <input type="text" id="remark" name="voltage_checking_insp_remark" class="md-form-control" spellcheck="false">
           <label class="md-control-label"></label>
       </div>
   </div>
</div>
</div>

<br><br>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-actions">
        <button type="button" class="card-action card-toggler" title="Collapse"></button>
        <button type="button" class="card-action card-reload" title="Reload"></button>
        <button type="button" class="card-action card-remove" title="Remove"></button>
    </div>
    <strong> <h4>AUTO DOOR CONTROL TESTING</h4></strong>
</div>
<div class="card-body" data-toggle="match-height">
  <table class="table">
    <thead>
      <tr>
        <th>SR. NO</th>
        <th>CHECK POINT</th>
        <th>DESCRIPTION</th>
        <th>STATUS</th>
    </tr>
</thead>
<tbody>
  <tr>
    <th>1</th>
    <td>
     DOC(DOOR OPEN COMMAND)
 </td>
 <td>
  DO Relay Status
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="1">
</td>

</tr>
<tr>
    <th>2</th>
    <td>
        DCC(DOOR CLOSE COMMAND)
    </td>
    <td>
        DC Relay Status
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="2">
    </td>

</tr>
<tr>
    <th>1</th>
    <td>
     AUTO FAN
 </td>
 <td>
  FAN Relay Status
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="3">
</td>

</tr>

</tbody>
</table>
</div>
</div>
<div class="row">
    <label class="col-md-4 control-label" for="remark">Remark</label>
    <div class="col-md-8">
       <div class="md-form-group">
           <input type="text" id="remark" name="auto_door_remark" class="md-form-control" spellcheck="false">
           <label class="md-control-label"></label>
       </div>
   </div>
</div>
</div>

<br><br>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-actions">
        <button type="button" class="card-action card-toggler" title="Collapse"></button>
        <button type="button" class="card-action card-reload" title="Reload"></button>
        <button type="button" class="card-action card-remove" title="Remove"></button>
    </div>
    <strong> <h4>NORMAL CONTROL TESTING</h4></strong>
</div>
<div class="card-body" data-toggle="match-height">
  <table class="table">
    <thead>
      <tr>
        <th>SR. NO</th>
        <th>CHECK POINT</th>
        <th>DESCRIPTION</th>
        <th>STATUS</th>
    </tr>
</thead>
<tbody>
  <tr>
    <th>1</th>
    <td>
     Car Gate(CG OPEN)UP Direction
 </td>
 <td>
  DO Relay Status
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="4">
</td>

</tr>
<tr>
    <th>2</th>
    <td>
        Car Gate(CG OPEN UP) Direction
    </td>
    <td>
        DN Relay Status
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="5">
    </td>

</tr>
<tr>
    <th>3</th>
    <td>
     Landing Gate (LG OPEN) UP Direction
 </td>
 <td>
     UP Relay Status
 </td>
 <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="6">
</td>

</tr>
<tr>
    <th>4</th>
    <td>
     Landing Gate (LG OPEN) DN Direction
 </td>
 <td>
    DN Relay Status
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="7">
</td>

</tr>
<tr>
    <th>5</th>
    <td>
        Landing Gate (LG OPEN)
    </td>
    <td>
        R-CAM Status
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="8">
    </td>

</tr>
<tr>
    <th>6</th>
    <td>
        Car Gate(CG OPEN)
    </td>
    <td>
       R-CAM Status
   </td>
   <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="9">
</td>

</tr>
<tr>
    <th>7</th>
    <td>
        DOB (IF CG OPEN)
    </td>
    <td>
     Door Open Bell
 </td>
 <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="10">
</td>

</tr>
<tr>
    <th>8</th>
    <td>
        UP Terminal is Open (ULT OPEN)
    </td>
    <td>
        UP Relay Status
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="11">
    </td>

</tr>
<tr>
    <th>9</th>
    <td>
        DN Terminal is Open (DTL OPEN)
    </td>
    <td>
        DN Relay Status
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="12">
    </td>

</tr>
<tr>
    <th>10</th>
    <td>
        UP Slow Open (UPS OPEN)
    </td>
    <td>
        HS Relay Status
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="13">
    </td>

</tr>
<tr>
    <th>11</th>
    <td>
       DN Slow Open (DNS OPEN)
   </td>
   <td>
    DN Relay Status
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="14">
</td>

</tr>
<tr>
    <th>12</th>
    <td>
        Landing Calls (ALL)
    </td>
    <td>
        Check Manually
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="15">
    </td>

</tr>
<tr>
    <th>13</th>
    <td>
        Car Cell (ALL)
    </td>
    <td>
        Check Manually
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="16">
    </td>

</tr>
<tr>
    <th>14</th>
    <td>
        Reed Swiches Status
    </td>
    <td>
        Check Manually
    </td>
    <td>
        <select name="status[]"  class="md-form-control">
            <option selected disabled value="">Select Status</option>
            <option value="ON">ON</option>  
            <option value="OFF">OFF</option>  
            <option value="OK">OK</option>  
        </select>
        <input type="hidden" name="checkpoint_id[]" value="17">
    </td>

</tr>
<tr>
    <th>15</th>
    <td>
        Indicator Display Checking With Arrow
    </td>
    <td>
     Check Display Card
 </td>
 <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="18">
</td>

</tr>
<tr>
    <th>16</th>
    <td>
     VFD DRIVE (I/P POWER WIRING)
 </td>
 <td>
    Check Manually
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="19">
</td>

</tr> <tr>
    <th>17</th>
    <td>
        VFD DRIVE (O/P POWER WIRING)
    </td>
    <td>
      Check Manually
  </td>
  <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="20">
</td>

</tr>
<tr>
    <th>18</th>
    <td>
     Speed Reference in VFD Drive
 </td>
 <td>
    HS/SS/INS Speed
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="21">
</td>

</tr>

</tbody>
</table>
</div>
</div>
<div class="row">
    <label class="col-md-4 control-label" for="remark">Remark</label>
    <div class="col-md-8">
       <div class="md-form-group">
           <input type="text" id="remark" name="noraml_control_remark" class="md-form-control" spellcheck="false">
           <label class="md-control-label"></label>
       </div>
   </div>
</div>
</div>



<br><br>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-actions">
        <button type="button" class="card-action card-toggler" title="Collapse"></button>
        <button type="button" class="card-action card-reload" title="Reload"></button>
        <button type="button" class="card-action card-remove" title="Remove"></button>
    </div>
    <strong> <h4>ARD CONTROL TESTING</h4></strong>
</div>
<div class="card-body" data-toggle="match-height">
  <table class="table">
    <thead>
      <tr>
        <th>SR. NO</th>
        <th>CHECK POINT</th>
        <th>DESCRIPTION</th>
        <th>STATUS</th>
    </tr>
</thead>
<tbody>
  <tr>
    <th>1</th>
    <td>
      Final Limit (IF T2 OPEN)
  </td>
  <td>
   ARD Status
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="22">
</td>

</tr>
<tr>
    <th>2</th>
    <td>
      STOP (IF M OPEN)
  </td>
  <td>
     ARD Status
 </td>
 <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="23">
</td>

</tr>

<tr>
    <th>3</th>
    <td>
       LOOK (LG/OS/OPEN)
   </td>
   <td>
     ARD Status
 </td>
 <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="24">
</td>

</tr>

<tr>
    <th>4</th>
    <td>
       R-CAM
   </td>
   <td>
       ON/OFF
   </td>
   <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="25">
</td>

</tr>

<tr>
    <th>5</th>
    <td>
       BRAKE
   </td>
   <td>
    ON/OFF
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="26">
</td>

</tr>

<tr>
    <th>6</th>
    <td>
      MOTOR RUNNING & DIRECTOR
  </td>
  <td>
      TEST RUN DIRECTION
  </td>
  <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="27">
</td>

</tr>

<tr>
    <th>7</th>
    <td>
      ARD ANNOUNCEMENT
  </td>
  <td>
    CHECK ANNOUNCEMENT
</td>
<td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="28">
</td>

</tr>

<tr>
    <th>8</th>
    <td>
       DOC (DOOR OPEN COMMAND)
   </td>
   <td>
       DO Relay Status
   </td>
   <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="29">
</td>

</tr>

<tr>
    <th>9</th>
    <td>
       DCC (DOOR CLOSE COMMAND)
   </td>
   <td>
      DC Relay Status
  </td>
  <td>
    <select name="status[]"  class="md-form-control">
        <option selected disabled value="">Select Status</option>
        <option value="ON">ON</option>  
        <option value="OFF">OFF</option>  
        <option value="OK">OK</option>  
    </select>
    <input type="hidden" name="checkpoint_id[]" value="30">
</td>

</tr>

</tbody>
</table>
</div>
</div>
<div class="row">
    <label class="col-md-4 control-label" for="remark">Remark</label>
    <div class="col-md-8">
       <div class="md-form-group">
           <input type="text" id="remark" name="ard_remark" class="md-form-control" spellcheck="false">
           <label class="md-control-label"></label>
       </div>
   </div>
</div>
</div>

<br><br>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-actions">
        <button type="button" class="card-action card-toggler" title="Collapse"></button>
        <button type="button" class="card-action card-reload" title="Reload"></button>
        <button type="button" class="card-action card-remove" title="Remove"></button>
    </div>
    <strong> <h4>VOLTAGE CHECKING</h4></strong>
</div>
<div class="card-body" data-toggle="match-height">
  <table class="table">
    <thead>
      <tr>
       <th rowspan="2">ARD MOTOR OUTPUT VOLTAGE</th>
       <th>RY</th>
       <th>BY</th>
       <th>BR</th>
   </tr>
   <tr>
    <th><input type="text" id="control-received" name="ard_motor_output_voltage[ry]" class="md-form-control" placeholder="V AC"></th>
    <th><input type="text" id="control-received" name="ard_motor_output_voltage[by]" class="md-form-control" placeholder="V AC"></th>
    <th><input type="text" id="control-received" name="ard_motor_output_voltage[br]" class="md-form-control" placeholder="V AC"></th>
</tr>
</thead>
<tbody>
  <tr>
    <th colspan="2">BR/RC OUTPUT VOLTAGE</th>
    <td><input type="text" id="control-received" name="br_rc_opt_volt" class="md-form-control" placeholder="V DC"></td>
</tr>
<tr>
    <th colspan="2">230 VAC FOR LIGHT & FAN</th>
    <td><input type="text" id="control-received" name="230VAC_light_fan" class="md-form-control" placeholder="V AC"></td>
</tr>
<tr>
    <th colspan="1">BATTERY VOLTAGE (VDC)</th>
    <td><input type="text" id="control-received" name="battery_voltage" class="md-form-control" placeholder="V DC"></td>
</tr>
</tbody>
</table>

</div>

</div>
<div class="row">
    <label class="col-md-4 control-label" for="remark">Remark</label>
    <div class="col-md-8">
       <div class="md-form-group">
           <input type="text" id="remark" name="voltage_check_remark" class="md-form-control" spellcheck="false">
           <label class="md-control-label"></label>
       </div>
   </div>
</div>
</div>

<div class="row">
    <center>
        <button type="submit" class="col-md-3 btn btn-info" id="btn-submit">Update</button>
    </center>
</form>



</div>
</div>

@endsection
@push('page-script')
<script>
    //update button click
    $("#btn-submit").click(function(e){
        e.preventDefault();
        $('select[name="status[]"]').each(function(){

            if($(this).val() == "" || $(this).val() == null)
            {
                console.log($(this));
                $(this).next('input[type="hidden"][name="checkpoint_id[]"]').prop('disabled',true);
                $(this).prop('disabled',true);

            }
            
        })
        $('#testing-form').submit();     
    })

    //edit page load assign previous value
    $(window).load(function(){
        
        //primary checking
        let primary_check = "{{$testResult->primary_checking}}";
        if(primary_check == "success")
        {
            $('input[type="checkbox"][name="all_component"]').prop('checked',true);
            $('input[type="checkbox"][name="trans_and_drive_features"]').prop('checked',true);
            $('input[type="checkbox"][name="specs_sticker"]').prop('checked',true);
            $('input[type="checkbox"][name="param_in_sticker"]').prop('checked',true);
            $('input[type="checkbox"][name="wire_proper"]').prop('checked',true);
            $('input[type="checkbox"][name="all_no"]').prop('checked',true);
            $('input[type="checkbox"][name="panel_door_key"]').prop('checked',true);
        }

        //voltage_checking_insp 
        let voltage_checking_insp = {!!$testResult->voltage_checking_insp!!};
            
            //output voltage
            $('input[name="output_voltage[]"]').each(function(index){
                $(this).val(voltage_checking_insp.output_voltage[index]);
            });
            //dc voltage
            $('input[name="dc_voltage[]"]').each(function(index){
                $(this).val(voltage_checking_insp.dc_voltage[index]);
            });

        //checkpoint_id and status
        let checkpoint_id = {!!$testResult->checkpoint_id!!};
        let status = {!!$testResult->status!!};
        for(var i=0; i<checkpoint_id.length;i++)
        {
            $('input[type="hidden"][name="checkpoint_id[]"][value="'+checkpoint_id[i]+'"]').closest('tr').find('select[name="status[]"] option[value="'+status[i]+'"]').prop("selected",true);
        }

        //voltage checking
        let voltage_checking = {!!$testResult->voltage_checking!!};

        $('input[name="ard_motor_output_voltage[br]"]').val(voltage_checking.ard_motor_opt_vlt['br']);
        $('input[name="ard_motor_output_voltage[by]"]').val(voltage_checking.ard_motor_opt_vlt['by']);
        $('input[name="ard_motor_output_voltage[ry]"]').val(voltage_checking.ard_motor_opt_vlt['ry']);
        $('input[name="br_rc_opt_volt"]').val(voltage_checking.br_rc_opt_volt);
        $('input[name="battery_voltage"]').val(voltage_checking.battery_voltage);
        $('input[name="230VAC_light_fan"]').val(voltage_checking.VAC_light_fan);

        //remarks
        let remarks = {!!$testResult->remarks!!};
        @php 
        $remarks = json_decode($testResult->remarks)
        @endphp
        @isset($remarks->voltage_insp)
            $('input[name="voltage_checking_insp_remark"]').val(remarks.voltage_insp);
        @endisset
        @isset($remarks->auto_door)
            $('input[name="auto_door_remark"]').val(remarks.auto_door);
        @endisset
        @isset($remarks->noraml_control)
            $('input[name="noraml_control_remark"]').val(remarks.noraml_control);
        @endisset
        @isset($remarks->ard_control)
            $('input[name="ard_remark"]').val(remarks.ard_control);
        @endisset
        @isset($remarks->voltage_check)
            $('input[name="voltage_check_remark"]').val(remarks.voltage_check);
        @endisset
    });
        
</script>
    
@endpush
