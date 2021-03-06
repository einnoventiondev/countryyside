<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CustomerForm;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams= User::where('role','team')->get();
        return view('modules.add-team.index',compact('teams'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team= User::find($id);
        return view('modules.add-team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $team=User::find($request->id);
        $cust_details = CustomerForm::where('user_id',$request->id)->first();
        if (is_null($cust_details))
        {
            $cust_details  = new CustomerForm;
            $cust_details->user_id = $request->id;
            $cust_details->save();  
        }
        $team->update([
            'name'=>$request->member_name,
            'email' =>$request->email
        ]);
        $cust_details->update([
            'age' => $request->age,
            'custm_contact' => $request->contact
        ]);



        return redirect()->route('team.index')->with('message', '???? ?????????? ???????????? ??????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=User::find($id)->delete();
        $client = CustomerForm::where('user_id',$id)->first()->delete();
        return redirect()->route('team.index')->with('message', '???? ?????? ???????????? ??????????');
    }
}
