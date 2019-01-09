<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTableController extends Controller
{
	public function clientContract(Request $request)
	{
		$columns = array( 
			0 => 'id', 
			1 => 'contract_date',
			2 => 'control_type',
			3 => 'created_at',
			4 => 'id',
		);

		$totalData = auth()->user()->contracts->count();

		$totalFiltered = $totalData; 

		$limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');

		if(empty($request->input('search.value')))
		{     
			$contracts = auth()->user()->contracts()
			->where('contract_status','pending')
			->offset($start)
			->limit($limit)
			->orderBy($order,$dir)
			->get();
			
		}
		else {
			$search = $request->input('search.value'); 

			$contracts =  auth()->user()->contracts()
			->where('contract_status','pending')
			->where('id','LIKE',"%{$search}%")
			->offset($start)
			->limit($limit)
			->orderBy($order,$dir)
			->get();

			$totalFiltered = auth()->user()->contracts()
			->where('contract_status','pending')
			->where('id','LIKE',"%{$search}%")
			->count();
		}

		$data = array();
		if(!empty($contracts))
		{
			foreach ($contracts as $contract)
			{
				$pdf =  route('contractPdf',[$contract->id]);
				$edit =  route('contract.edit',[$contract->id]);

				$nestedData['contract_no'] = $contract->id;
				$nestedData['contract_date'] = $contract->contract_date;
				$nestedData['control_type'] = $contract->detail->control_type;
				$nestedData['action'] = "<a href='{$edit}' class='btn btn-xs btn-outline-warning' 							data-toggle='tooltip' title='Edit Contract'>
                                        <i class='icon icon-edit'></i></a>
										<a href='{$pdf}' target='_blank'><button type='button' class='btn 
										btn-xs btn-outline-primary' data-toggle='tooltip' title='View 
										Contract'><i class='icon icon-eye'></i>
                              			</button></a><a href='javascript:;' data-contract_id='{$contract->
                              			id}' class='deleteContract'>
                                    	<button type='button' class='btn btn-xs btn-outline-primary' 
                                    	data-toggle='tooltip' title='Delete Contract'>
                                        <i class='icon icon-trash'></i>
                                    	</button></a>";
				$data[] = $nestedData;

			}
		}

		$json_data = array(
			"draw"            => intval($request->input('draw')),  
			"recordsTotal"    => intval($totalData),  
			"recordsFiltered" => intval($totalFiltered), 
			"data"            => $data,   
		);

		echo json_encode($json_data); 

	}
}
