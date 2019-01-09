<?php

namespace App\Helpers;
use App\User;
use PDF;
use Illuminate\View\View;
use App\ContractDetail;
use App\SupervisorStockAssign;
use App\Contract;
use App\TestingResult;
use App\Checkpoint;
use App\ProductionReport;
use App\AssignStock;
use App\ProductStock;
use App\DirectBuyer;
use App\DirectSoldProduct;
use App\RrsClient;



class PdfHelper {

    public static function contractPdf($id){
        $contract = Contract::findOrFail($id);
        $pdf =  PDF::loadView('pdf.contract',compact('contract'));
        return $pdf;
    }

    //supervisor stock assign pdf
    public static function supervisorStockAssignPdf($id)
    {
    	$stockAssign = SupervisorStockAssign::find($id);
    	$contract = Contract::find($stockAssign->contract_id);
    	$pdf =  PDF::loadView('pdf.supervisor_stock_assign',compact('stockAssign','contract'));
        return $pdf;
    }

    //tested status pdf
    public static function testStatusPdf($id)
    {

        $testResults = TestingResult::where('supervisorStockAssign_id',$id)->first();
        $checkpoints = Checkpoint::with('testingType')->find(json_decode($testResults->checkpoint_id));
        $status      = json_decode($testResults->status);
        $remarks     = json_decode($testResults->remarks);
        $voltage_checking_insp = json_decode($testResults->voltage_checking_insp);
        $voltage_checking      = json_decode($testResults->voltage_checking);

        $pdf =  PDF::loadView('pdf.test_report',compact('testResults','checkpoints','status','remarks','voltage_checking_insp','voltage_checking'));

        return $pdf;
    }

    //production report 
    public static function production_report_pdf($id)
    {
        $reports = ProductionReport::where('supervisor_stock_assign_id',$id)->first();

        $pdf = PDF::loadView('pdf.production_report',compact('reports'));

        return $pdf;
    }

    public static function contractHistory($id)
    {
        $contract = Contract::findOrFail($id);
     
        $pdf = PDF::loadView('pdf.contract_history',compact('contract'));

        return $pdf;
    }

    public static function productAssignPdf($id){

        $assignStock = AssignStock::find($id);


        $product_ids = json_decode($assignStock->products_id,true);

        $product_qtys = json_decode($assignStock->products_qty,true);

        $products = ProductStock::find($product_ids);



        $pdf = PDF::loadView('pdf.product_assigned',compact('product_ids','product_qtys','products','assignStock'));

        return $pdf;

       
    }

    public static function getProductAssignedToTech($id){
    $assignStocks = AssignStock::where('supervisor_stock_assign_id',$id)->get();


    $products = [];

        foreach ($assignStocks as $key => $stock) {

            $product_ids = json_decode($stock->products_id,true);
            $product_qty = json_decode($stock->products_qty,true);
            $items = [];
            foreach($product_ids as $i=>$id){
                $item = ProductStock::with('category','brand')->where('id',$id)->first()->toArray();
               $item['assign_qty'] = $product_qty[$i];
                array_push($items,$item);

            }

            $data = ['items' => $items,'assign_date'=> $stock->created_at];
            array_push($products, $data); 

        }


        $pdf = PDF::loadView('pdf.tech_assigned_products',compact('products'));


        return $pdf;

    }
    
    public static function directDeductReport($id){
        $buyer = DirectBuyer::find($id);

        $products = $buyer->directSoldProduct;

        return PDF::loadView('pdf.direct_deduct_report',compact('products','buyer'));

    }

        public static function returnReplaceReport($id){
        $client = RrsClient::find($id);

        $replace_products = $client->rrsDetail()->where('status','replace')->get();

        $return_products = $client->rrsDetail()->where('status','return')->get();

        $scrap_products = $client->rrsDetail()->where('status','scrap')->get();

        return PDF::loadView('pdf.return_replace_report',compact('replace_products','return_products','scrap_products','client'));

    }
}
