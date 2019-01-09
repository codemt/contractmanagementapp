<?php

namespace App\Http\Controllers;

use App\SupervisorStockAssign;
use Carbon\Carbon;
use App\Contract;
use App\Technician;
use App\Stock;
use App\Tester;
use Illuminate\Http\Request;
use App\Helpers\PdfHelper;
use App\ContractRemark;
use App\Http\Requests\AssignStockRequest;
use Pdf;
use App\Http\Requests\AssignStockFromReadyProducts;
use App\ReadyMadeProduct;
use Illuminate\Support\Facades\DB;

class SupervisorStockAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    

        //return $request;
        $contract = Contract::find($request->contract_id);
         //serial number generate
        $supervisor = SupervisorStockAssign::orderBy('id','desc')->first();

        $serial_number = null;

        if(!is_null($supervisor))
        {
            $serial_number = 'ICS-CLIENT-'.$contract->client_name.date("Y").'-'.($supervisor->id+1);
        }


        if(!$request->previous_contract_id)
        {
         //logic board details
        $logic_board_details = $request->only(['logic_board','power_supply','extension','relay_card','voice_card','other_card','ard_card']);

        //connector and wire details
        $connector_details = $request->only(['connector_field','connector_power','wire_field','wire_power']);  

      
        SupervisorStockAssign::create([
            'supervisor_id'=> auth()->guard('supervisor')->user()->id,
            'contract_id'  => $request->contract_id,
            'control_type' => $request->control_type,
            'control'      => $request->control,
            'a_cont_24vdc'=>$request->a_cont_24vdc,
            'ard_announcment'=>$request->ard_announcment,
            'control_no'   => $request->control_no,
            'order_taken_by'=> $request->order_taken_by,
            'due_date'     => Carbon::create($request->due_date),
            'unique_code'  => 'ICS'.time().rand(1,100),
            'logic_board_details' => !empty($logic_board_details)?json_encode($logic_board_details) : NULL,
            'box_size'     => $request->box_size,
            'register_capacitor' => json_encode(array_filter_recursive($request->reg_capacitor)),
            'contractor_details' => json_encode(array_filter_recursive($request->Contractor)),
            'mcb_details'        => json_encode(array_filter_recursive($request->mcb)),
            'overload_details'   =>json_encode(array_filter_recursive($request->overload)),
            'connector_wire_details' => json_encode($connector_details),
            'transformer_details'    => json_encode($request->Transformer),
            'drive_details'          => json_encode($request->drive),
            'nutbolt'  => json_encode($request->nutbolt),
            'wiser'    => json_encode($request->wiser),
            'ol_relay'    => json_encode($request->ol_relay),
            'lug'      => json_encode($request->lug),
            'any_other_details' => $request->any_other_details,
            'technician_id'     =>$request->technician,
            'stock_id'       => $request->stock,
            'status'         => 'Assigned to Stock',
            'contract_serial_number' => is_null($serial_number)?'ICS-CLIENT-'.$contract->client_name.date("Y").'-1':$serial_number,
        ]);

        //change status in contract_details table
        $contract->update(['contract_status'=>'Assigned to Stock']);

        ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $request->contract_id,
                'status'      => 'Assigned to Stock',
                'remark'      =>  'Assigned to Stock',

            ]);
    }
    else
    {
        SupervisorStockAssign::create([
            'supervisor_id'=> auth()->guard('supervisor')->user()->id,
            'contract_id'  => $request->contract_id,
            'previous_contract_id' => $request->previous_contract_id,
            'add_new'      => $request->add_new,
            'remove_previous' => $request->remove_previous,
            'replace_old'     => $request->replace_old,
            'product_name'    => $request->product_name,
            'order_taken_by'=> $request->order_taken_by,
            'due_date'     => Carbon::create($request->due_date),
            'unique_code'  => 'ICS'.time().rand(1,100),
            'technician_id'     =>$request->technician,
            'stock_id'       => $request->stock,
            'status'         => 'Assigned to Stock',
            'contract_serial_number' => is_null($serial_number)?'ICS-CLIENT-'.$contract->client_name.date("Y").'-1':$serial_number,
        ]);

         ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $request->contract_id,
                'status'      => 'Assigned to Stock',
                'remark'      =>  'Assigned to Stock with existing product',

            ]);
    }

        return redirect()->route('supervisor.approved_contract');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupervisorStockAssign  $supervisorStockAssign
     * @return \Illuminate\Http\Response
     */
    public function show(SupervisorStockAssign $supervisorStockAssign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupervisorStockAssign  $supervisorStockAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(SupervisorStockAssign $supervisorStockAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupervisorStockAssign  $supervisorStockAssign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupervisorStockAssign $supervisorStockAssign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupervisorStockAssign  $supervisorStockAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupervisorStockAssign $supervisorStockAssign)
    {
        //
    }

    public function approved()
    {

        $contracts = Contract::with('supervisorStockAssign')->where('contract_status','Approved')->orderBy('id','desc')->get();

        $products = ReadyMadeProduct::all();

        return view('supervisor.contracts.approved',compact('contracts','products'));
    }


    //assign stock create 
    public function getAssignStock(Request $request)
    {
        $contract = Contract::find($request->contract_id);

     // return $contract;
        if($request->take_control_from == 'Take From Stock')
        {
            $product = ReadyMadeProduct::find($request->product_id); 
            $stockAssign = SupervisorStockAssign::find($product->supervisor_stock_assign_id);
            $contractor_details  = json_decode($stockAssign->contractor_details,true);
       //return $contractor_details['Relay'];
           // return $stockAssign;
            return view('supervisor.contracts.take_stock',compact('contract','stockAssign'));
        }else{
            return view('supervisor.contracts.assign_stock',compact('contract'));
        }
        
    }
    public function getassigncontract()
    {
        $contracts = SupervisorStockAssign::where('status','Assigned to Stock')->get();
        return view('supervisor.contracts.assigned',compact('contracts'));
    }
    public function getassembledcontract()
    {   

        $testers = Technician::all();
        $contracts = SupervisorStockAssign::where('status','Assembled')->get();
        // $contracts = DB::table('supervisor_stock_assigns')
        //             ->select('supervisor_stock_assigns.contract_id','supervisor_stock_assigns.order_taken_by','supervisor_stock_assigns.contract_serial_number','supervisor_stock_assigns.status','supervisor_stock_assigns.product_name','technicians.name as tester_name')
        //             ->join('technicians','technicians.id','=','supervisor_stock_assigns.technician_id')
        //             ->get();

                    $id=1;
      //  return $contracts;
     return view('supervisor.contracts.assembled',compact('contracts','testers','id'));
    }
    public function gettestedcontract()
    {
        $contracts = SupervisorStockAssign::where('status','Tested')->get();
        return view('supervisor.contracts.tested',compact('contracts'));
    }
    public function getcompletedcontract()
    {
        $contracts = SupervisorStockAssign::where('status','Completed')->get();
        //return $contracts;
       return view('supervisor.contracts.completed',compact('contracts'));
    }
    public function assign_tester(Request $request)
    {
        $assigntester = SupervisorStockAssign::find($request->id);
        $assigntester->tester = $request->tester;
        $assigntester->save();
         ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $request->contract_id,
                'status'      => 'Tester Assigned',
                'remark'      =>  'Supervisor Assigned Tester',

            ]);

        return redirect('supervisor/assembled_contract');

    }
    public function change_technician(Request $request)
    {

        $old_technician = [];
        $assignTechnician = SupervisorStockAssign::find($request->id);
        if($assignTechnician->technician_id == $request->technician_id)
        {
            return redirect()->back();
        }
        else
        {

            if(!empty($assignTechnician->old_technician_id))
            {
                $old_technician = json_decode($assignTechnician->old_technician_id);
                array_push($old_technician,$request->technician_id);
            }
            else
            {

                array_push($old_technician,$request->technician_id);
            }

            $assignTechnician->old_technician_id = json_encode($old_technician);
            $assignTechnician->technician_id = $request->technician_id;
            $assignTechnician->save();
        }
        
        return redirect()->back();

    }
    public function complete($id)
    {
        $completed = SupervisorStockAssign::find($id);
        $completed->status = "Completed";
        $completed->save();
        ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $completed->contract_id,
                'status'      => 'Product Completed',
                'remark'      =>  'Product Completed',

            ]);
        return redirect()->back();
    }
    public function tested_status($id)
    {
        $pdf = PdfHelper::testStatusPdf($id);

        return $pdf->stream();
    }

    public function createUser($role)
    {
           return view('supervisor.create_user',compact('role'));
    }

    public function PostCreateUser(Request $request,$role)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.$role.'s',
            'password' => 'required|string|min:6|confirmed',
        ]);

        switch ($role) {
            case 'technician':       
                Technician::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                ]);   
                
            break;
            case 'tester':       
                Tester::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                ]);   

            break;
            case 'stock':       
                Stock::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                ]);   
            break;
            
            default:
                return redirect()->back();
                break;
        }
        return redirect()->back()->with('success',ucfirst($role).' Created Successfully');
 
    }

    public function production_report_pdf($id)
    {
        $pdf = PdfHelper::production_report_pdf($id);

        return $pdf->stream();
    }

    public function allContract(){

        $contracts = Contract::all();

        return view('supervisor.contracts.all_contract',compact('contracts'));

    }

    public function filterContract(Request $request){

        $this->validate($request,[
            'status' => 'required',
        ]);

        $contracts = Contract::where('contract_status',$request->status)->get();

        return view('supervisor.contracts.all_contract',compact('contracts'));
    }

    public function contractHistory($id){

        $pdf = PdfHelper::contractHistory($id);

        return  $pdf->stream();
    }

    public function stockAssignPdf($id)
    {
        $pdf = PdfHelper::supervisorStockAssignPdf($id);
        return $pdf->stream();
    }

    public function getControlNo($id){

    	$technician = Technician::find($id);
    	$supervisorStock = SupervisorStockAssign::whereMonth('created_at',\Carbon\Carbon::now())
    						->whereYear('created_at',\Carbon\Carbon::now())->orderBy('id','desc')->first();
    	if($supervisorStock){
    		$control_no = $SupervisorStock->control_no;
    		$count = intVal(last(explode('-',$control_no))) + 1;
    		$new_control_no = $technician->name.\Carbon\Carbon::now()->month.'/'.\Carbon\Carbon::now()->year.'-'.$count;
    		return $new_control_no;
    	}else{
    		$new_control_no = $technician->name.'-'.\Carbon\Carbon::now()->month.'/'.\Carbon\Carbon::now()->year.'-1';
    		return $new_control_no;
    	}
    }

}
