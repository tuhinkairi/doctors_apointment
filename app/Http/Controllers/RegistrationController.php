<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctors_tabel;
use App\Models\Customers;
use App\Models\apointment;
 
class RegistrationController extends Controller
{
    public function signup(){
        return view('login');
    }
    // login user
    public function login(Request $request){
        //validation
        $request->validate(
            [
                'login_email'=>'required|email',
                'login_password'=>'required',
        ]
        
    ); 
    $user = Customers::where('email',$request['login_email'])->first();
    if($user){
        if(Customers::where('password',$request['login_password'])->first()){
            if (Auth::attempt($credentials)) {
                // Authentication successful, redirect the user to a specific route
                return redirect('/');
            }
            else{
                return redirect()->back()->with('error', 'Invalid credentials');
            }
        }
    }
}
    
    
    // registering user    
public function register(Request $request){
    // validating
    $request->validate(
        [
            'register_name'=>'required',
            'register_email'=>'required|email',
            'register_password'=>'required',
            'confirm_password'=>'required|same:register_password'
        ]
    );
    
    // insert data to db   
       $customers = new Customers;
       $customers->name =$request['register_name'] ;
       $customers->email=$request['register_email'] ;
       $customers->password=md5($request['register_password']) ;
       $customers->save();
       
       return redirect('/');
}
    // TAKING APOINTMENT
public function book(Request $request){
        $request->validate(
            [
                'doctor_type'=>'required',
                'doctor_name'=>'required',
                'patient_name'=>'required',
                'doctor_name'=>'required',
                'gender'=>'required',
                'apointment_time'=>'required',
                'email'=>'required',
                ]
            );
            print_r($request->all());
            // saving data to apointment
            $apointment= new apointment;
            $apointment->doctor_id= $request['doctor_name'];
            $apointment->doctor_name= $request['doctor_name'];
            $apointment->user_id= $request['email'];
            $apointment->user_name= $request['patient_name'];
            $apointment->doctor_type= $request['doctor_type'];
            $apointment->gender= $request['gender'];
            $apointment->apointment_date=$request['apointment_time'];
            $apointment->save();

            return redirect('/dashboard');
    }
    
    //cancel apointment
    public function cancel($id){
        apointment::find($id)->delete();
        return redirect('')->back();
    } 
    // RENDER DASHBOARD
    public function dashboard(){
        // collect all data
        $data = apointment::all();
        $apointments = compact('data'); 
        return view('admin')->with($apointments);
    }
}
