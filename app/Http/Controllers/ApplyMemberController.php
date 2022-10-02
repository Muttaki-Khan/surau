<?php

namespace App\Http\Controllers;
use Session;
use App\contacts;
use App\applymembers;
use Illuminate\Http\Request;
use App\members;
use Mail;



class ApplyMemberController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = applymembers::orderBy('id','desc')->get();
        $memberbar = applymembers::orderBy('id','desc')->get()->take(3);

        return view('admin.home.showMember',compact('member','memberbar'));
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
        $member = new applymembers;

        $member->name = $request->name;
        $member->email = $request->email;
        $member->mobile = $request->mobile;
        $member->address = $request->address;

        $member->save();

        Mail::send('email.member',['name'=>'Hello'],function($message)
        {
            $message->to('suraudeveloper@gmail.com','New Form')->from('suraudeveloper@gmail.com')->subject("Member Request");
        });

        Session::flash('success','You have succesfully sent the request, We will let you know if your request accepted');

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = applymembers::find($id);
        $member->delete();
        Session::flash('success','You have read the message.');
        return redirect()->back();


    }
    public function trashed()
    {
        $member = applymembers::onlyTrashed()->get();
        $memberbar = applymembers::orderBy('id','desc')->get()->take(3);
        return view('admin.home.readMember',compact('member','memberbar'));
    }
    public function kill($id)
    {
        $item = applymembers::withTrashed()->where('id',$id)->first();

        $item->forceDelete();

        Session::flash('success','You have succesfully deleted the message.');

        return redirect()->back();
    }
}
