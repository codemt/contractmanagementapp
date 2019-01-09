<?php

namespace App\Http\Controllers;

use App\Contract;
use App\User;
use App\Helpers\PdfHelper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Session;
use Excel;
use App\ContractRemark;


class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->guard('web')->check())
        {
            $contracts = auth()->user()->contracts->where('contract_status','pending');
            return view('client.pendingcontract',compact('contracts'));
        }
        else
        {
            $contracts = Contract::where('contract_status','pending')->orderBy('id','desc')->get();
            return view('supervisor.contracts.show',compact('contracts'));
        }
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        if(get_guard() == 'supervisor')
        {
            $allUser = User::orderBy('id','desc')->get();
            return view('supervisor.contracts.create',compact('allUser'));
        }
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = Contract::create([
            'user_id' => $request->input('user_id'),
            'contract_date' => Carbon::parse($request->input('contract_date')),
            'client_name'  => $request->input('client_name'),
            'email'  => $request->input('email'),
            'contact_person' => $request->input('contact_person'),
            'mobile_number' => $request->input('mobile_number'),
            'site_address'  => $request->input('site_address'),
        ]);

        return view('client.create',compact('contract'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {

     $contract_details = $contract->detail;
     if($contract_details->control_type == 'ARD')
     {
        return view('ContractEditForms.ard_edit',compact('contract','contract_details'));
    }
    elseif($contract_details->control_type == 'V3F')
    {
        return view('ContractEditForms.w3f_edit',compact('contract','contract_details'));
    }
    elseif($contract_details->control_type == 'V3F+ARD')
    {
        return view('ContractEditForms.w3f_ard_edit',compact('contract','contract_details'));
    }
    elseif($contract_details->control_type == 'SS')
    {
        return view('ContractEditForms.single_speed_edit',compact('contract','contract_details'));
    }
    elseif($contract_details->control_type == 'SS+ARD')
    {
        return view('ContractEditForms.single_speed_ard_edit',compact('contract','contract_details'));
    }

    elseif($contract_details->control_type == 'HYDRAULIC')
    {
        return view('ContractEditForms.hydraulic_edit',compact('contract','contract_details'));
    }
    elseif($contract_details->control_type == 'GEARLESS')
    {
        return view('ContractEditForms.gearless_edit',compact('contract','contract_details'));
    }
    elseif($contract_details->control_type == 'INTEGRATED')
    {
        return view('ContractEditForms.integrated_edit',compact('contract','contract_details'));
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        if (!is_null($contract->detail)) 
        { 
            $contract->detail->delete();
        }
        $contract->delete();
    }

    public function  createclient(ClientRequest $request)
    {   

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        $user->save();
        if($request->createClient == "createClient")
        {
            Session::flash('success','Client created successfully');
            return redirect()->back();
        }

        return view('supervisor.contracts.create',compact('user'));
    }

    public function allclient()
    {
        $clients = User::orderBy('id','desc')->get();
        return view('supervisor.clients.index',compact('clients'));
    }

    public  function status(Request $request)
    {
        $contract = Contract::find($request->id);
        $contract->contract_status = "Approved";
        $contract->save();

         ContractRemark::create([
                'action_taken_by' => get_guard(),
                'contract_id' => $contract->id,
                'status'      => 'Contract Approved',
                'remarks'      =>  'Contract Approved By Supervisor',

            ]);

            return response()->json('success');

        
    }
    public function createcontract($id)
    {
        $user = User::find($id);
        return view('supervisor.contracts.create',compact('user'));
    }

    public function clientApprovedContract()
    {

        $contracts = auth()->user()->contracts()->where('contract_status','!=','pending')->orderBy('created_at','desc')->get();

        return view('client.clientallcontract',compact('contracts'));
    }
       public function clientCancelledContract()
    {

        $contracts = auth()->user()->contracts->where('contract_status','Cancelled');

        return view('client.clientallcontract',compact('contracts'));
    }


    public function getContractPdf($id){
        $pdf = PdfHelper::contractPdf($id);
        return $pdf->stream();
    }
    public function contractPdf($id){

        $path = base_path('public/pdf_contract/');

        try
        {
            if(file_exists($path."pdf.pdf"))
            {
                unlink($path."pdf.pdf");                
            }
            if(file_exists($path."pdf1.pdf"))
            {
                unlink($path."pdf1.pdf");
            }
            if(file_exists($path."pdf2.pdf"))
            {
                unlink($path."pdf2.pdf");
            }
            if(file_exists($path."pdf3.pdf"))
            {
                unlink($path."pdf3.pdf");
            }
            if(file_exists($path."pdf4.pdf"))
            {
                unlink($path."pdf4.pdf");
            }
        }
        catch(ErrorException $e)
        {

        }

        $pdf = PdfHelper::contractPdf($id);

        $ssa_id = \App\SupervisorStockAssign::where("contract_id",$id)->first();

        if($ssa_id == null)
        {
            return $pdf->stream();
        }

        $pdf->save($path."pdf.pdf");

        $pdf1 = PdfHelper::supervisorStockAssignPdf($ssa_id->id);

        $pdf1->save($path."pdf1.pdf");

        $testResults = \App\TestingResult::where('supervisorStockAssign_id',$ssa_id->id)->first();

        if($testResults == null)
        {
            $pdf_final = \PDFMerger::init();
            $pdf_final->addPathToPDF($path."pdf.pdf", 'all');
            $pdf_final->addPathToPDF($path."pdf1.pdf", 'all');
            $pdf_final->merge();
            return $pdf_final->inline();
        }             

        $pdf2 = PdfHelper::testStatusPdf($ssa_id->id);

        $pdf2->save($path."pdf2.pdf");

        $productionresults = \App\ProductionReport::where('supervisor_stock_assign_id',$ssa_id->id)->first();

        if($productionresults == null)
        {
            $pdf_final = \PDFMerger::init();
            $pdf_final->addPathToPDF($path."pdf.pdf", 'all');
            $pdf_final->addPathToPDF($path."pdf1.pdf", 'all');
            $pdf_final->addPathToPDF($path."pdf2.pdf", 'all');
            $pdf_final->merge();
            return $pdf_final->inline();
        }        

        $pdf3 = PdfHelper::production_report_pdf($ssa_id->id);

        $pdf3->save($path."pdf3.pdf");

        $pdf4 = PdfHelper::getProductAssignedToTech($ssa_id->id);

        $pdf4->save($path."pdf4.pdf");

        $pdf_final = \PDFMerger::init();

        $pdf_final->addPathToPDF($path."pdf.pdf", 'all');
        $pdf_final->addPathToPDF($path."pdf1.pdf", 'all');
        $pdf_final->addPathToPDF($path."pdf2.pdf", 'all');
        $pdf_final->addPathToPDF($path."pdf3.pdf", 'all');
        $pdf_final->addPathToPDF($path."pdf4.pdf", 'all');
        $pdf_final->merge();
        
        return $pdf_final->inline();
    }


    public function deleteclient($id)
    {
        $client = User::find($id);
        $client->delete();
    }

    public function importClient(Request $request){
        if($request->file('import_client')){
            $path = $request->file('import_client')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
            if(!empty($data) && $data->count()){
               $dataArray = [];
               foreach ($data->toArray() as $index => $row){
                if(!empty($row)){
                   
                    $dataArray[] =
                    [
                        'name' => $row['name'] ?? '',
                        'email'=>$row['email'] ?? '',
                        'phone' => $row['phone'] ?? '',
                        'password' => bcrypt('123456'),
                        'address'  => $row['address'] ?? '',
                        'gst_no'   => $row['gst_no'] ?? '',

                    ];
                }

            }

        }

       
        if(!empty($dataArray)){
            User::insert($dataArray);
            return back();
        }


Session::flash('error','Import Failed');
return back();
}


}
    public function cancelled($id)
    {
        $contract = Contract::find($id);
        $contract->contract_status = "Cancelled";
        $contract->save(); 

        return redirect()->back();
    }

}
