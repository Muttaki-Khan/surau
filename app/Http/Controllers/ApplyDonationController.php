<?php

namespace App\Http\Controllers;
use Session;
use App\contacts;
use App\applydonations;
use Illuminate\Http\Request;
use App\donations;
use Mail;
use DB;

class ApplyDonationController extends Controller
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
        $donation = applydonations::orderBy('id','desc')->get();
        $donationbar = applydonations::orderBy('id','desc')->get()->take(3);

        return view('admin.home.showDonation',compact('donation','donationbar'));
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
        $donation = new applydonations;

        $donation->name = $request->name;
        $donation->email = $request->email;
        $donation->mobile = $request->mobile;
        $donation->address = $request->address;
        $donation->status = $request->status;
        $donation->account_name = $request->account_name;
        $donation->account_number = $request->account_number;
        $donation->bank_name = $request->bank_name;
        $donation->message = $request->message;


        $donation->save();

        Mail::send('email.send',['name'=>'Hello'],function($message)
        {
            $message->to('suraudeveloper@gmail.com','New Form')->from('suraudeveloper@gmail.com')->subject("Fund Request");
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
        $donation = DB::table('applydonations')
                            ->where('applydonations.id',$id)
                            ->first();

        return view('admin.home.viewFunding',compact('donation'));
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
        $donation = applydonations::find($id);
        $donation->delete();
        Session::flash('success','You have read the message.');
        return redirect()->back();


    }
    public function trashed()
    {
        $donation = applydonations::onlyTrashed()->get();
        $donationbar = applydonations::orderBy('id','desc')->get()->take(3);
        return view('admin.home.readDonation',compact('donation','donationbar'));
    }
    public function kill($id)
    {
        $item = applydonations::withTrashed()->where('id',$id)->first();

        $item->forceDelete();

        Session::flash('success','You have succesfully deleted the message.');

        return redirect()->back();
    }
}
