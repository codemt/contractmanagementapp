<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>

        .bo{
            border:1px solid;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="col-md-12 bo">
        <div class="col-md-4">
            <h4>Date:{{ \Carbon\Carbon::parse($contract->contract_date)->format('d/m/Y')}}</h4>
        </div>
        <div class="col-md-4">
            <h3>ORDER</h3>
        </div>
        <div class="col-md-4">
            <h4>Sr. No:</h4>
        </div>
    </div>

    <div class="col-md-6 bo">
        <h1>LOGO</h1>
        <p>Regd Office:</p>

        <div class="col-md-12 bo">
            PAN NO:
        </div>
        <div class="col-md-6 bo"><p>GST No:</p></div>
        <div class="col-md-6 bo"></div>
        <div class="col-md-6 bo"><p>SAC / HSN NO:</p></div>
        <div class="col-md-6 bo"></div>
    </div>
    <div class="col-md-6 bo">
        <p>Name:{{$contract->client_name}}</p>
        <p>State:</p>
        <p>Address:</p>
        <p>Mobile No:{{$user->phone}}</p>
        <p>Delivery Date:</p>
    </div>

    <div class="col-md-12 bo">
        <h3>Control Specification</h3>

       @if($contract->detail->control_type == "ARD")
        <table>
            <tr class="">
               
                <td>
                    <ol type="1">
                        <li>Control Type:</li>
                        <li>Motor HP:</li>
                        <li>Motor Type:</li>
                        <li>Door Mode:</li>
                        <li>Battery:</li>
                        <li>Controller:</li>
                        <li>specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>{{$contract->detail->control_type ?? ''}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                        <li>{{$contract->detail->motor_type ?? ''}}</li>
                       <!--  <li>
                            <ul>
                                @php 
                                $datas = json_decode($contract->detail->door_mode,true);
                                
                                @endphp
                            @foreach($datas as $data)
                            @php
                                dd($data);
                            @endphp
                           
                            @endforeach
                           
                            </ul>
                        </li> -->
                        <li>{{$contract->detail->choose_battery ?? ''}}</li>
                        <li>{{$contract->detail->ard_need_for_controller ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>
        @elseif($contract->detail->control_type == "V3F")
       <table>
                <td>
                    <ol type="1">
                        <li>Control Type:</li>
                        <li>Duplex System:</li>
                        <li>No. of Floor:</li>
                        <li>Indications:</li>
                        <li>Reed Type:</li>
                        <li>Collective Mode:</li>
                        <li>Motor HP:</li>
                        <li>Output contractor Require:</li>
                        <li>Motor Brake Voltage:</li>
                        <li>Door Mode</li>
                        <li>R-CAM Voltage:</li>
                        <li>Resister-Capacitor circuit require:</li>
                        <li>COP & LOP Display Voltage:</li>
                        <li>Voice Announcement System Require:</li>
                        <li>Other Features:</li>
                        <li>Other Accessories:</li>
                        <li>Other specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>{{$contract->detail->control_type ?? ''}}</li>
                        <li>{{$contract->detail->duplex_system ?? ''}}</li>
                        <li>{{$contract->detail->indications ?? ''}}</li>
                        <li>{{$contract->detail->reed_type ?? ''}}</li>
                        <li>{{$contract->detail->collective_mode ?? ''}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                        <li>{{$contract->detail->output_contractor ?? ''}}</li>
                        <li>{{$contract->detail->motor_brake_voltage ?? ''}}</li>
                        <li>{{implode(', ', json_decode($contract->detail->door_mode ?? ''))}}</li>
                        <li>{{$contract->detail->drive_detail ?? ''}}</li>
                        <li>{{$contract->detail->r_cam_voltage ?? ''}}</li>
                        <li>{{$contract->detail->register_capacitor_circuit ?? ''}}</li>
                        <li>{{$contract->detail->display_voltag ?? ''}}</li>
                        <li>{{$contract->detail->voice_accouncement_system ?? ''}}</li>
                        <li>{{$contract->detail->other_features ?? ''}}</li>
                        <li>{{$contract->detail->other_accessories ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>
            @elseif($contract->detail->control_type == "V3F+ARD")
               <table>
                <td>
                    <ol type="1">
                        <li>Control Type:</li>
                        <li>Duplex System:</li>
                        <li>No. of Floor:</li>
                        <li>Indications:</li>
                        <li>Reed Type:</li>
                         <li>Door Mode</li>
                        <li>Collective Mode:</li>
                        <li>Motor HP:</li>
                         <li>Battery:</li>
                        <li>Motor Brake Voltage:</li>
                       
                        <li>R-CAM Voltage:</li>
                        <li>Resister-Capacitor circuit require:</li>
                        <li>COP & LOP Display Voltage:</li>
                        <li>Voice Announcement System Require:</li>
                        <li>Other Features:</li>
                        <li>Other Accessories:</li>
                        <li>Other specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>{{$contract->detail->control_type ?? ''}}</li>
                        <li>{{$contract->detail->duplex_system ?? ''}}</li>
                        <li>{{$contract->detail->indications ?? ''}}</li>
                        <li>{{$contract->detail->reed_type ?? ''}}</li>
                         <li>{{implode(', ', json_decode($contract->detail->door_mode ?? ''))}}</li>
                        <li>{{$contract->detail->collective_mode ?? ''}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                         <li>{{$contract->detail->choose_battery ?? ''}}</li>
                        <li>{{$contract->detail->motor_brake_voltage ?? ''}}</li>
                        <li>{{$contract->detail->drive_detail ?? ''}}</li>
                        <li>{{$contract->detail->r_cam_voltage ?? ''}}</li>
                        <li>{{$contract->detail->register_capacitor_circuit ?? ''}}</li>
                        <li>{{$contract->detail->display_voltag ?? ''}}</li>
                        <li>{{$contract->detail->voice_accouncement_system ?? ''}}</li>
                        <li>{{$contract->detail->other_features ?? ''}}</li>
                        <li>{{$contract->detail->other_accessories ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>
                       @elseif($contract->detail->control_type == "SINGLE SPEED")
               <table>
                <td>
                    <ol type="1">
                       
                        <li>No. of Floor:</li>
                        <li>Indications:</li>
                        <li>Reed Type:</li>
                        <li>Door Mode</li>
                        <li>Collective Mode:</li>
                        <li>Motor HP:</li>
                        <li>Contractor Coil Voltage:</li>
                        <li>Motor Brake Voltage:</li>
                        <li>R-CAM Voltage:</li>
          
                        <li>COP & LOP Display Voltage:</li>
                        <li>Voice Announcement System Require:</li>
                      
                        <li>Other specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
             
                        <li>{{$contract->detail->indications ?? ''}}</li>
                        <li>{{$contract->detail->reed_type ?? ''}}</li>
                        <li>{{implode(', ', json_decode($contract->detail->door_mode ?? ''))}}</li>
                        <li>{{$contract->detail->collective_mode ?? ''}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                        <li>{{$contract->detail->contractor_coil_voltage ?? ''}}</li>
                        <li>{{$contract->detail->motor_brake_voltage ?? ''}}</li>
                        <li>{{$contract->detail->drive_detail ?? ''}}</li>
                        <li>{{$contract->detail->r_cam_voltage ?? ''}}</li>
                        <li>{{$contract->detail->display_voltag ?? ''}}</li>
                        <li>{{$contract->detail->voice_accouncement_system ?? ''}}</li>
                        <li>{{$contract->detail->other_features ?? ''}}</li>
                        <li>{{$contract->detail->other_accessories ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>
                    @elseif($contract->detail->control_type == "HYDRAULIC")
               <table>
                <td>
                    <ol type="1">
                            <li>Control Type:</li>
                            <li>No. of Floor:</li>
                            <li>Indications:</li>
                            <li>Door Mode</li>
                            <li>Motor HP:</li>
                            <li>Motor Type:</li>
                            <li>No. of Valve:</li>
                            <li>Valve Coil Voltage</li>
                            <li>Power Pack make by</li>
                            <li>UPS type ARD System</li>
                            <li>UPS & Battery for ARD</li>
                            <li>Battery:</li>
                            <li>Voice Announcement System Require:</li>
                            <li>Other Features:</li>
                            <li>Other Accessories:</li>
                            <li>Other specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>{{$contract->detail->control_type ?? ''}}</li>
                        <li>{{$contract->detail->indications ?? ''}}</li>
                        <li>{{implode(', ', json_decode($contract->detail->door_mode ?? ''))}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                        <li>{{$contract->detail->motor_type ?? ''}}</li>
                        <li>{{$contract->detail->no_of_valve ?? ''}}</li>
                        <li>{{$contract->detail->valve_coil_voltage ?? ''}}</li>
                        <li>{{$contract->detail->power_pack ?? ''}}</li>
                        <li>{{$contract->detail->ups_system ?? ''}}</li>
                        <li>{{$contract->detail->bettry_for_ard ?? ''}}</li>
                        <li>{{$contract->detail->choose_battery ?? ''}}</li>
                        <li>{{$contract->detail->drive_detail ?? ''}}</li>
                        <li>{{$contract->detail->voice_accouncement_system ?? ''}}</li>
                        <li>{{$contract->detail->other_features ?? ''}}</li>
                        <li>{{$contract->detail->other_accessories ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>
                @elseif($contract->detail->control_type == "GEARLESS")
       <table>
                <td>
                    <ol type="1">
                            <li>Control Type:</li>
                            <li>Duplex System:</li>
                            <li>No. of Floor:</li>
                            <li>Indications:</li>
                            <li>Reed Type:</li>
                            <li>Collective Mode:</li>
                            <li>Motor HP:</li>
                            <li>Inbulid UPS type ARD System</li>
                            <li>Motor Brake Voltage:</li>
                            <li>Door Mode</li>
                            <li>R-CAM Voltage:</li>
                            <li>Resister-Capacitor circuit require:</li>
                            <li>COP & LOP Display Voltage:</li>
                            <li>Voice Announcement System Require:</li>
                            <li>Encoder Details:</li>
                            <li>Drive Details:</li>
                            <li>PG Card Details:</li>
                            <li>Other Features:</li>
                            <li>Other Accessories:</li>
                            <li>Other specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>{{$contract->detail->control_type ?? ''}}</li>
                        <li>{{$contract->detail->duplex_system ?? ''}}</li>
                        <li>{{$contract->detail->indications ?? ''}}</li>
                        <li>{{$contract->detail->reed_type ?? ''}}</li>
                        <li>{{$contract->detail->collective_mode ?? ''}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                        <li>{{$contract->detail->ups_system ?? ''}}</li>
                        <li>{{$contract->detail->motor_brake_voltage ?? ''}}</li>
                        <li>{{implode(', ', json_decode($contract->detail->door_mode ?? ''))}}</li>
                        <li>{{$contract->detail->drive_detail ?? ''}}</li>
                        <li>{{$contract->detail->r_cam_voltage ?? ''}}</li>
                        <li>{{$contract->detail->register_capacitor_circuit ?? ''}}</li>
                        <li>{{$contract->detail->display_voltag ?? ''}}</li>
                        <li>{{$contract->detail->voice_accouncement_system ?? ''}}</li>
                        <li>{{$contract->detail->encoder_details ?? ''}}</li>
                        <li>{{$contract->detail->drive_details ?? ''}}</li>
                        <li>{{$contract->detail->pg_card_details ?? ''}}</li>
                        <li>{{$contract->detail->other_features ?? ''}}</li>
                        <li>{{$contract->detail->other_accessories ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>

@elseif($contract->detail->control_type == "INTEGRATED")
       <table>
                <td>
                    <ol type="1">
                                <li>Control Type:</li>
                                <li>Communication Mode:</li>
                                <li>No. of Floor:</li>
                                <li>Indications:</li>
                                <li>Collective Mode:</li>
                                <li>Motor HP:</li>
                                <li>Motor Type:</li>
                                <li>Motor Brake Voltage:</li>
                                <li>Door Mode</li>
                                <li>COP & LOP Display Voltage:</li>
                                <li>Voice Announcement System Require:</li>
                                <li>Encoder Details:</li>
                                <li>UPS type ARD System</li>
                                <li>Drive Details:</li>
                                <li>PG Card Details:</li>
                                <li>Other Features:</li>
                                <li>Other Accessories:</li>
                                <li>Other specification:</li>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>{{$contract->detail->control_type ?? ''}}</li>
                        <li>{{$contract->detail->communication_mode ?? ''}}</li>
                        <li>{{$contract->detail->indications ?? ''}}</li>
                        <li>{{$contract->detail->collective_mode ?? ''}}</li>
                        <li>{{$contract->detail->motor_hp ?? ''}}</li>
                        <li>{{$contract->detail->motor_type ?? ''}}</li>
                        <li>{{$contract->detail->motor_brake_voltage ?? ''}}</li>
                        <li>{{implode(', ', json_decode($contract->detail->door_mode ?? ''))}}</li>
                        <li>{{$contract->detail->drive_detail ?? ''}}</li>
                        <li>{{$contract->detail->display_voltag ?? ''}}</li>
                        <li>{{$contract->detail->voice_accouncement_system ?? ''}}</li>
                        <li>{{$contract->detail->encoder_details ?? ''}}</li>
                        <li>{{$contract->detail->ups_system ?? ''}}</li>
                        <li>{{$contract->detail->drive_details ?? ''}}</li>
                        <li>{{$contract->detail->pg_card_details ?? ''}}</li>
                        <li>{{$contract->detail->other_features ?? ''}}</li>
                        <li>{{$contract->detail->other_accessories ?? ''}}</li>
                        <li>{{$contract->detail->other_specification ?? ''}}</li>
                    </ul>
                </td>
             
            </tr>
        </table>
        @endif

               <tr class="">

    </div>
    <p><strong>Declareation:</strong></p>





    <div class="col-md-1" style="border-top: 3px solid;margin-top: 50px;">
        signature
    </div>

</div>    <!-- end of container-fluid -->

</body>
</html>