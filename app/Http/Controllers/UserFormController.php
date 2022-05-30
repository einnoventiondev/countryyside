<?php

namespace App\Http\Controllers;

use App\Mail\SendPassword;
use App\Models\User;
use App\Models\Continent;
use App\Models\CustomerForm;
use App\Models\Contact;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserFormController extends Controller
{
    public function sliderForm(){

        $europe=  DB::table('continents')->where('continent','Europe')->get();
        dd($europe);
        $asia=  DB::table('continents')->where('continent','Asia')->get();
        $arabia=  DB::table('continents')->where('continent','Arabia')->get();

        return view('modules.user-slider-form.user-slider-form', compact( 'europe','asia', 'arabia'));
    }
    public function UserForm(Request $req){
        
        $rules = [

            'continent' => 'required|string',
            'flight_class' => 'required|string',
            'car_type' => 'required|string',
            'guest_name' => 'required',
            'guest_age' => 'required',
            'guest_contact' => 'required',
            'email' => 'required|unique:users'
           // 'travel_history' => 'required'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator);
        }
        else {
            $data = $req->input();

            $custm_login = new User;

            $generate_password = Str::random(8);

            $custm_login->name = $req->guest_name['0'];
            $custm_login->email = $req->email;
            $hashed_random_password = Hash::make($generate_password);
            $custm_login->password = $hashed_random_password;
            $custm_login->role = 'customer';
            $custm_login->save();

            $cutm_data = new CustomerForm;

            $cutm_data->user_id = $custm_login->id;
            $cutm_data->age = $req->guest_age['0'];
            $cutm_data->custm_contact = '+966'.$req->guest_contact;

            $cutm_data->team_assign = 'Assign Team';
            $cutm_data->custm_status = 'In-progress';


            $previous_travel = '';
             $cutm_data->destination = $data['continent'];
            $europe = $req->previous_travel_europe;
            $asia = $req->previous_travel_asia;
            $arabia = $req->previous_travel_arabia;
            if(!empty($europe))
            {
                $cutm_data->previous_travel_europe = $req->previous_travel_europe;
            }
            if(!empty($asia)){
                $cutm_data->previous_travel_asia = $req->previous_travel_asia;
            }
            if(!empty($arabia)){
                $cutm_data->previous_travel_arabia = $req->previous_travel_arabia;
            }
            if($req->has('previous_travel')) {
                $cutm_data->previous_travel = $req->previous_travel;
            }
            $cutm_data->accomodation_facility = $data['stay'];
            $cutm_data->flight_class = $data['flight_class'];
            $cutm_data->car_type = $data['car_type'];
            $cutm_data->save();
            $get_id = $cutm_data->id;

            $guest_data = new Guest;
            $guest_data->custm_id = $get_id;
            $guest_data->guest_name = json_encode($req->guest_name);
            $guest_data->guest_age = json_encode($req->guest_age);
            $guest_data->guest_contact = '+966'.$req->guest_contact;
            // $guest_data->travel_history = $req->travel_history;
            $guest_data->save();

            $temp = [
                'generate_password' =>$generate_password,
                "name" => $req->guest_name['0'],
                "email" => $req->email,
                "role" => 'customer',
                "age" => $req->guest_age['0'],
                "contact" => '+966'.$req->guest_contact,
                "team" => 'Assign Team',
                "status" =>'In-progress',
                "destination" => $data['continent'],
                "customer_id" => $get_id,
            ];
            //Mail::to($req->email)->send(new SendPassword($generate_password));
            Mail::to('shahzadanouman@hotmail.com')->send(new SendPassword($temp));
        $europe=  DB::table('continents')->where('continent','Europe')->get();
        $asia=  DB::table('continents')->where('continent','Asia')->get();
        $arabia=  DB::table('continents')->where('continent','Arabia')->get();

            return view('modules.user-airplane.user-airplane',compact( 'europe','asia', 'arabia'));
        }
    }
    public function contactUs(Request $req){
        $rules = [
            'customer_name' => 'required|string|min:3|max:255',
            'customer_email' => 'required|string',
            'customer_number' => 'required',
            'msg_title' => 'required|string|max:255',
            'message' => 'required|string|max:500'
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator);
        }
        else{
            $contact_data = $req->input();

            $contact = new Contact;

            $contact->name = $contact_data['customer_name'];
            $contact->email = $contact_data['customer_email'];
            $contact->mobile_number = $contact_data['customer_number'];
            $contact->message_title = $contact_data['msg_title'];
            $contact->message = $contact_data['message'];
            $contact->save();

            return Redirect::back()->with('contact-message','Thank You! We will contact you back soon');
        }
    }

    public function userhome()
    {
        $europe=  DB::table('continents')->where('continent','Europe')->get();
        $asia=  DB::table('continents')->where('continent','Asia')->get();
        $arabia=  DB::table('continents')->where('continent','Arabia')->get();
        return view('modules.user-home.user-home',compact( 'europe','asia', 'arabia'));
    }
}
