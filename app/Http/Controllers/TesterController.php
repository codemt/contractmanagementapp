<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupervisorStockAssign;
use App\TestingResult;
use Carbon\Carbon;
use App\ContractRemark;

class TesterController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:technician');
    }

    public function productForTesting()
    {

        $testProducts = SupervisorStockAssign::where([['tester','=',auth()->guard('technician')->user()->id],['status','=','Assembled']])->get();
        //return $testProducts;
    	return view('tester.index',compact('testProducts'));
    }

    public function productTested()
    {
    	$testedProducts = SupervisorStockAssign::where([['tester','=',auth()->guard('technician')->user()->id],['status','=','Tested Draft']])
            ->orWhere('status','Issue Found In Testing')
            ->orWhere('status','Issue Solved')
            ->orWhere('status','Tested')
            ->groupBy('status')
            ->get();
    	return view('tester.testedProduct',compact('testedProducts'));
    }

    public function gettestProduct($id)
    {
    	return view('tester.show',compact('id'));
    }

    public function postTestProduct(Request $request,$id,$test_result_id = null)
    {
       
    	$product = SupervisorStockAssign::find($id);
        //VOLTAGE CHACKING UNDER INSP
        $voltage_checking_insp = $request->only(['input_voltage','output_voltage','dc_voltage']);

        //remarks
        $remarks = ['voltage_insp'=>$request->voltage_checking_insp_remark,'auto_door'=> $request->auto_door_remark, 'noraml_control' => $request->noraml_control_remark,'ard_control'=>$request->ard_remark,'voltage_check' => $request->voltage_check_remark];
        $remarks = array_filter_recursive($remarks); 
        //array_filter_recursive() function defined in Helpers\AppHelper

        //voltage checking 
        $ard_motor_output_voltage = array_filter_recursive($request->ard_motor_output_voltage);

        $voltage_checking = ["ard_motor_opt_vlt" => $ard_motor_output_voltage,'br_rc_opt_volt' => $request->br_rc_opt_volt,'VAC_light_fan' => $request->input('230VAC_light_fan'),'battery_voltage' => $request->battery_voltage];

        //checkpoint and status
        $checkpoints = $request->checkpoint_id;
        $status     = $request->status;

        //store data testing_results table
        TestingResult::updateOrCreate(['id'=>$test_result_id],[
            'contract_id' => $product->contract->id,
            'supervisorStockAssign_id' => $id,
            'voltage_checking_insp'    => json_encode($voltage_checking_insp),
            'voltage_checking'         => json_encode($voltage_checking),
            'remarks'                  => json_encode($remarks),
            'checkpoint_id'            => json_encode($checkpoints),
            'status'                   => json_encode($status),
            'primary_checking'         => 'success',
            'received_date'            => Carbon::parse($request->received_date),
        ]);

        $product->status = "Tested Draft";
        $product->save();
    	return redirect()->route('technician.product.tested');
    }

    public function sendToSupervisor($id)
    {
        $product = SupervisorStockAssign::find($id);
        $product->status = "Tested";
        $product->save();

        ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $product->contract->id,
                'status'      => 'Product Tested',
                'remark'      =>  'Product Tested Remark',

            ]);

    }

    public function editTest($id)
    {
        $supervisorStockAsssign = SupervisorStockAssign::find($id);
        $testResult = $supervisorStockAsssign->contract->testingResult;

        return view('tester.testing_result_edit',compact('testResult'));
    }

    public function returnToTechnician($id)
    {
        $supervisorStockAssign =  SupervisorStockAssign::find($id);
        $supervisorStockAssign->status = "Issue Found In Testing";
        $supervisorStockAssign->save();
        ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $supervisorStockAssign->contract->id,
                'status'      => 'Issue Found In Testing',
                'remark'      =>  'Issue Found In Testing',

            ]);

    }

}
