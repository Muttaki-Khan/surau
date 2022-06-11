<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donations;
use App\applydonations;
use App\contacts;
use App\staffs;
use App\item;
use App\about;
use App\category;
use App\exhibition;
use App\incomingdonations;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
Auth::routes();
use Illuminate\Support\Facades\Route; 
use Session;

class DonationController extends Controller
{
  public function incomingdonation(Request $request)
  {
      $donation = new incomingdonations;

      $donation->name = $request->name;
      $donation->email = $request->email;
      $donation->mobile = $request->mobile;
      $donation->message = $request->message;

      $donation->save();

      Session::flash('success','You have succesfully sent the message');

      return redirect()->back();
  }
  public function listdonations(){

    $indonations = DB::table('incomingdonations')->get();
    return view('admin.donation.incomingdonations',['indonations'=>$indonations]);
}
public function indelete($id){

  $donationDelete = incomingdonations::find($id);
  $donationDelete->delete();

  return redirect('/listdonations')->with('message','Deleted successfully.');
}

    public function index(){

        return view('admin.donation.donationEntry');
}

    public function save(Request $request){

        $donation = new donations();


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

        //$donationDelete = applydonations::find($request->id);
        //$donationDelete->delete();
        DB::table('applydonations')->where('id', '=', $request->id)->delete();

        return redirect('/donation/manage')->with('message','Data insert successfully.');

  }
public function manage(){

    $donations = DB::table('donations')->get();
    return view('admin.donation.donationManage',['donation'=>$donations]);
}

public function edit($id){

    $donationEdit = donations::where('id',$id)->first();
    return view('admin.donation.donationEdit',['donation'=>$donationEdit]);
}

public function update(Request $request){

    $donationUp = donations::find($request->donationId);
    $donationUp->name=$request->name;
    $donationUp->email=$request->email;
    $donationUp->address=$request->address;
    $donationUp->mobile=$request->mobile;

    $donationUp->save();

    return redirect('/donation/manage')->with('message','Updated successfully.');

}

public function delete($id){

    $donationDelete = donations::find($id);
    $donationDelete->delete();

    return redirect('/donation/manage')->with('message','Deleted successfully.');
}

public function donation(){

    $museum_id = session('museum_id', '1');
    $contacts = contacts::where('id',1)->first();
    $is_admin = true;
    if(Auth::user()==null) {
      $is_admin=false;
    } else if(User::where('id',Auth::id())->first()->role_id==2) {
      $is_admin=false;
    }
    if($is_admin==false) {
      $user = User::where('id',$museum_id)->first();
      
      $contact  = DB::table('contacts')->where('user_id', $museum_id)->get();

      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $textcolor = $user->textcolor;
      $donations = donations::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.donation', compact('contact','contacts','theme','logo','font','textcolor','donations','footimg','mapimage','categories'));

    }else{

      $user = User::where('id',Auth::id())->first();
      // $user = User::where('id',1)->first();
      $contact  = DB::table('contacts')->where('user_id', Auth::id())->get();


      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $textcolor = $user->textcolor;
      $donations = donations::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.donation', compact('contact','contacts','theme','logo','font','textcolor','donations','footimg','mapimage','categories'));
    }
    
}

public function applydonation(){

    $museum_id = session('museum_id', '1');
    $contacts = contacts::where('id',1)->first();
    $is_admin = true;
    if(Auth::user()==null) {
      $is_admin=false;
    } else if(User::where('id',Auth::id())->first()->role_id==2) {
      $is_admin=false;
    }
    if($is_admin==false) {
      $user = User::where('id',$museum_id)->first();
      
      $contact  = DB::table('contacts')->where('user_id', $museum_id)->get();

      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $textcolor = $user->textcolor;
      $donations = donations::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.applydonation', compact('contact','contacts','theme','logo','font','textcolor','donations','footimg','mapimage','categories'));

    }else{

      $user = User::where('id',Auth::id())->first();
      // $user = User::where('id',1)->first();
      $contact  = DB::table('contacts')->where('user_id', Auth::id())->get();


      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $textcolor = $user->textcolor;
      $donations = donations::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.applydonation', compact('contact','contacts','theme','logo','font','textcolor','donations','footimg','mapimage','categories'));
    }}


}
