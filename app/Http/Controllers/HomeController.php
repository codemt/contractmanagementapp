<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\View\View;
use App\Technician;
use App\Contract;
use App\Stock;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->guard('supervisor')->check()) {

            $contracts = Contract::where('contract_status','!=','Cancelled')->orderBy('id','desc')->get();   
           return view('supervisor.index',compact('contracts'));
       }
       elseif (auth()->guard('technician')->check()) {
           return redirect()->route('technician.new_task');
       }
       elseif (auth()->guard('tester')->check()) {
           return view('tester.index');
       }
       elseif (auth()->guard('stock')->check()) {
           return redirect()->route('stock.new_assignment');
       }
       elseif (auth()->guard('web')->check()) {
           return view('client.index');
       }
      

       return redirect()->route('login');

   }

   public function getClientEmail(Request $request)
   {
    $user = User::find($request->id);

    return response()->json($user);
}

public function compose(View $view)
{
    $technicians = Technician::all();
    $stocks = Stock::all();
    $view->with(['technicians' => $technicians,'stocks' => $stocks]) ;
}

public function profile(Request $request){
  return view ('client.profile');
}

public function updateProfile(Request $request){

    if($request->role == 'client')
    {
      $table = 'users';
    }
    elseif ($request->role == 'technician') {
       $table = 'technicians';
    }
    elseif($request->role == 'supervisor')
    {
      $table = 'supervisors';
    }
    elseif($request->role == 'stock')
    {
      $table = 'stocks';
    }

    $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:'.$table.',email',
            'password' => 'required',
        ]);

  $user = auth()->guard((get_guard()=="client")?"web":get_guard())->user();
  auth()->guard((get_guard()=="client")?"web":get_guard())->logout();
  if($table == 'users')
  {
    User::where('id',$user->id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' =>  bcrypt($request->password),
    ]);
    return redirect('/client/login');
  }
  elseif($table == 'stocks')
  {
    Stock::where('id',$user->id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' =>  bcrypt($request->password),
    ]);
    return redirect ('/stock/login');
  }
  elseif($table == 'technicians')
  {
    Technician::where('id',$user->id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' =>  bcrypt($request->password),
    ]);
    return redirect ('/technician/login');
  }
  elseif($table == 'supervisors')
  {
    Supervisor::where('id',$user->id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'password' =>  bcrypt($request->password),
    ]);
    return redirect ('/supervisor/login');
  }
  

  
}

}
