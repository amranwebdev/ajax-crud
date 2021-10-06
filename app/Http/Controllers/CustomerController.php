<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function newCustomer(){

        $customers=Customer::all();
        //dd($customers);
        return view('backend.customer',compact('customers'));
    }

    public function  storeCustomer(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
                'name'       => 'required|max:50',
                'details'       => 'required|max:2000',
            ]);
            if ($validator->fails()) {
                $data          = array();
                $data['error'] = $validator->errors()->all();
                return response()->json([
                    'success' => false,
                    'data'    => $data,
                ]);
            } else {
    
                // $year= Carbon::parse($request->year)->format('Y');
                // dd($year);
                $data=array();
                $data['name']=$request->name;
                $data['details']=$request->details;
    
                $inserted_info=Customer::create($data);
                $data['id']=$inserted_info->id;
                $data['formatted_details']=substr($inserted_info->details, 0, 25);;
                $data['message']='Customer added successfully!';
    
                // dd($inserted_info);
    
                return response()->json([
                     'success' => true,
                    'data'    => $data,
                ]);
    
            }
        }

    public function deleteCustomer(Request $request){
        $item = Customer::find($request->id);
        //dd($item);
              if ($item) {
                  $item->delete();
               $data            = array();
               $data['message'] = 'Customer deleted successfully';
               $data['id']      = $request->id;
               return response()->json([
                   'success' => true,
                   'data'    => $data,
               ]);
              }else{
               $data            = array();
               $data['message'] = 'Customer can not delete';
               return response()->json([
                   'success' => false,
                   'data'    => $data,
               ]);
              }
       }

    public function editCustomer(Request $request){
        $data = Customer::find($request->id);
        //dd($data);
          if ($data) {
              return response()->json([
                  'success' => true,
                  'data'    => $data,
              ]);
          } else {
              return response()->json([
                  'success' => false,
                  'data'    => 'No information found',
              ]);
          }
    }

    public function updateCustomer(Request $request){
         //dd($request->all());
    
            $validator = Validator::make($request->all(), [
                'name'       => 'required|max:50',
                'details'       => 'required|max:2000',
                'hidden_id'       => 'required',
            ]);
            if ($validator->fails()) {
                $data          = array();
                $data['error'] = $validator->errors()->all();
                return response()->json([
                    'success' => false,
                    'data'    => $data,
                ]);
            } else {
                $category  = Customer::find($request->hidden_id);
                
               // dd($category);
                
    
             
    
                $category['name']           = $request->name;
                $category['details']        = $request->details;
                $category->update();

                $details = substr($category->details, 0, 25);
    
                $data                = array();
                $data['message']     = 'Customer updated successfully';
                $data['name']       = $category->name;
                $data['details']   = $details; 
                $data['id']          = $request->hidden_id;
    
                return response()->json([
                    'success' => true,
                    'data'    => $data,
                ]);
            }
    }


}
