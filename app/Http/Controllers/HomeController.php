<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerForm;
use App\Models\User;
use App\Models\Comment;
use App\Models\Continent;
use App\Models\Guest;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\VocationSendMail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendPassword;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        $custm_data = CustomerForm::all();
        if(Auth::user()->role == 'admin'){
            $count = $custm_data->count();
            $count_progress_status = CustomerForm::where('custm_status','In-progress')->count();
            $count_teams = User::where('role','team')->count();
            $count_completed_status = CustomerForm::where('custm_status','Completed')->count();
        }else{
            $count = $custm_data->where('team_assign_id',Auth::user()->id)->count();
            $count_progress_status = CustomerForm::where('custm_status','In-progress')
                ->where('team_assign',Auth::user()->name)
                ->count();
            $count_teams = User::where('role','team')->count();
            $count_completed_status = CustomerForm::where('custm_status','Completed')
                ->where('team_assign',Auth::user()->name)
                ->count();
        }


        $custm_data_team_assigned = CustomerForm::where('team_assign_id',Auth::user()->id)->get();
        $custm_profile_data = CustomerForm::where('user_id',Auth::user()->id)->first();

        // $guest_data = Guest::where('custm_id',$custm_profile_data->id)->first();
        // if(Auth::user()->role == 'customer'){

        //     $guest_data = Guest::where('custm_id',$custm_profile_data->id)->first();
        // }

        $user_data =User::where('role','team')->get();

        if(isset($custm_profile_data)){
            $guest_data = Guest::where('custm_id',$custm_profile_data->id)->first();
            $get_custm_comments = Comment::where('user_id',$custm_profile_data->user_id)
                ->orderBy('created_at','ASC')
                ->get();
            return view('modules.dashboard.index', compact('custm_data', 'user_data', 'custm_data_team_assigned', 'custm_profile_data', 'get_custm_comments', 'count', 'count_progress_status', 'count_teams', 'count_completed_status', 'guest_data'));
        }
        return view('modules.dashboard.index', compact('custm_data', 'user_data', 'custm_data_team_assigned', 'custm_profile_data', 'count', 'count_progress_status', 'count_teams', 'count_completed_status'));
    }

    public function showAllRecord(){

        $custm_data = CustomerForm::all();
        if(Auth::user()->role == 'admin'){
            $count = $custm_data->count();
            $count_progress_status = CustomerForm::where('custm_status','In-progress')->count();
            $count_teams = User::where('role','team')->count();
            $count_completed_status = CustomerForm::where('custm_status','Completed')->count();
        }else{
            $count = CustomerForm::where('team_assign_id',Auth::user()->id)
                ->orwhere('team_assign_id',null)
                ->count();
            $count_progress_status = CustomerForm::where('custm_status','In-progress')
                ->where('team_assign',Auth::user()->name)
                ->count();
            $count_teams = User::where('role','team')->count();
            $count_completed_status = CustomerForm::where('custm_status','Completed')
                ->where('team_assign',Auth::user()->name)
                ->count();
        }

        $custm_data_team_assigned = CustomerForm::where('team_assign_id',Auth::user()->id)
            ->orwhere('team_assign_id',null)
            ->get();

        $user_data = User::where('role','team')->get();
        return view('modules.dashboard.index', compact('custm_data', 'user_data', 'custm_data_team_assigned', 'count', 'count_progress_status', 'count_teams', 'count_completed_status'));
    }

    public function statusUpdate(Request $req){
        $custm_id = $req->id;
        $data = CustomerForm::where('id', $custm_id)->first();
        $user_id  =   $data->user_id;
        $user_data = User::where('id',$user_id)->first();
        $user_mail = $user_data->email;
        $custm_status = $req->status;
        $details = $custm_status;
    DB::table('customer_forms')
            ->where('id', $custm_id)
            ->update([
                'custm_status'=> $custm_status
            ]);

        if($req->status == 'In-progress'){
            DB::table('customer_forms')
                ->where('id', $custm_id)
                ->update([
                    'team_assign_id' => Auth::user()->id,
                    'team_assign' => Auth::user()->name
                ]);
        }
      Mail::to($user_mail)->send(new VocationSendMail($details));

        return Redirect::back();
    }

    public function detailData($id){

        $data = CustomerForm::where('id', $id)->first();
        $guest_data = Guest::where('custm_id',$id)->first();
            $get_comments = Comment::where('user_id',$data->user_id)
                ->orderBy('created_at','ASC')
                ->get();
            return view('modules.customer-details.custm-details', compact('data', 'get_comments','guest_data'));

    }

    public function assignTeam(){

        $custm_data = CustomerForm::all();

        return view('modules.assign-team.assign-team', compact('custm_data'));
    }

    public function deleteRecord(Request  $req){
        $recod_id = $req->custm_id;
        $customer_data = CustomerForm::where('id', $recod_id)->first();
        $get_user_id = $customer_data->user_id;
        CustomerForm::where('id', $recod_id)->delete();
        User::where('id', $get_user_id)->delete();
        Guest::where('custm_id',$recod_id)->delete();
        //$custm_data = CustomerForm::all();
        return Redirect::back()->with('message', 'تم حذف السجل بنجاح');
    }

    public function addCities(){
        return view('modules.add-cities.add-cities');
    }

    public function addNewCities(Request $req){

           $continent = new Continent();
           $continent->city = $req->city;
           $continent->continent=$req->continent;
           $continent->save();
           return redirect()->route('city.index')->with('message', 'تمت إضافة المدينة بنجاح');
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();
        CustomerForm::where('user_id',$request->user_id)->update(['upload_file'=>$fileName]);

        $request->file->move(public_path('uploads'), $fileName);

        return Redirect::back()
            ->with('message','File Uploaded');
    }

    public function addTeam(Request  $req){

        $rules = [
            'email' => 'required|unique:users'
            ];

        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator);
        }else{

            $team_member_name = $req->member_name;
            $team_member_email = $req->email;

            $generate_password = Str::random(8);

            $add = new User;
            $add->name = $team_member_name;
            $add->email = $team_member_email;
            $add->password = Hash::make($generate_password);
            $add->role = 'team';
            $add->save();

            Mail::to($team_member_email)->send(new SendPassword($generate_password));

            return redirect()->route('team.index')->with('message', 'أضيف بنجاح');
        }


    }
    public function assignCustomerTeam(Request $request){


        $team = User::where('id', $request->user)->first();
        CustomerForm::where('id', $request->id)
            ->update(['team_assign_id'=> $team->id,'team_assign'=> $team->name]);

            return response()->json($request);
    }
    public function commentsDiscussion(Request $req){

            $record = new Comment;
            $record->user_id = $req->user_id;
            $record->comments = $req->comment;
            $record->role = Auth::user()->role;
            $record->save();

            if(Auth::user()->role == 'customer'){
                Session::put('id',$req->user_id);

                return redirect()->route('home');
            }else{
                return redirect()->back();
            }

    }

    public function downloadfile($id)
    {
        $customer = CustomerForm::where('user_id',$id)->first();
        if(!empty($customer->upload_file)){
            return response()->download(public_path('uploads/'.$customer->upload_file));
        }
        return Redirect::back()->with('message','File does not exist.');
    }
    public function contactRequest(){
        $chart_options = [
            'chart_title' => 'تقارير الطلبات اليومية',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Contact',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'line',
        ];
        $chart1 = new LaravelChart($chart_options);
        $teams= User::where('role','team')->get()->take(5);
        $contact_request = Contact::all();
        //dd($contact_request);
        return view('modules.contact-data-view.contact-data-view', compact('contact_request','chart1','teams'));
    }
    public function resetPassword(Request $req){

        $req->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|string|min:6|same:confirm_password',
            'confirm_password' => 'required',
        ]);
        User::find(Auth::user()->id)->update(['password'=> Hash::make($req->new_password)]);
        return back()->with('message', 'الرقم السري تغير بنجاح!');
    }
}
