<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Client;
use App\Delivery;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Client::all(); //Get all clients

        $deliveries = Delivery::all(); //Get all clients

        $nbre_customer = count($customers);

        $users = User::all();

        $nbre_user = count($users);

        $deposits = DB::table('deposits')
             ->where('status', '=', 0)
             ->get();

        $nbre_deposit = count($deposits);

        $nbre_retrait = count($deliveries);

        return view('dashboard', compact('customers', 'nbre_customer', 'nbre_deposit', 'nbre_retrait', 'nbre_user'));
    }

    public function getCustomer()
    {
        $customers = Client::all(); //Get all clients

        return view('customer', compact('customers'));
    }

    public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('clients')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('firstname', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('phone_number', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      /* else
      {
       $data = DB::table('clients')
         ->orderBy('id', 'desc')
         ->limit(10)
         ->get();  

         $data = [];

        
      } */ 
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->firstname.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->phone_number.'</td>
         <td>'.$row->address.'</td>
         <td><a href="'.route('depositedarticle.create', $row->id).'" class="btn btn-success btn-xs"><i class="fa fa-cart-arrow-down"></i> Nouveau Dépôt</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Pas de Client trouvé</td>
        <td><a href="'.route('customers.create').'" class="btn btn-success btn-xs"><i class="fa fa-smile-o"></i> Ajouter Client </a></td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
