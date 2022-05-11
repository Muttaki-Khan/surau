<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\members;
use App\contacts;
use App\staffs;
use App\item;
use App\about;
use App\category;
use App\exhibition;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
Auth::routes();
use Illuminate\Support\Facades\Route; 
use Session;

class MemberController extends Controller
{
    public function index(){

        return view('admin.member.memberEntry');
}

    public function save(Request $request){

        $member = new members();


        $member->name = $request->name;
        $member->address = $request->address;
        $member->contacts = $request->contacts;

        $member->save();

        return redirect('/member/entry')->with('message','Data insert successfully.');



  }
public function manage(){

    $members = DB::table('members')->get();
    return view('admin.member.memberManage',['member'=>$members]);
}

public function edit($id){

    $memberEdit = members::where('id',$id)->first();
    return view('admin.member.memberEdit',['member'=>$memberEdit]);
}

public function update(Request $request){

    $memberUp = members::find($request->memberId);
    $memberUp->name=$request->name;
    $memberUp->address=$request->address;
    $memberUp->contacts=$request->contacts;

    $memberUp->save();

    return redirect('/member/manage')->with('message','Updated successfully.');

}

public function delete($id){

    $memberDelete = members::find($id);
    $memberDelete->delete();

    return redirect('/member/manage')->with('message','Deleted successfully.');
}

public function member(){

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
      $members = members::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.member', compact('contact','contacts','theme','logo','font','textcolor','members','footimg','mapimage','categories'));

    }else{

      $user = User::where('id',Auth::id())->first();
      // $user = User::where('id',1)->first();
      $contact  = DB::table('contacts')->where('user_id', Auth::id())->get();


      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $textcolor = $user->textcolor;
      $members = members::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.member', compact('contact','contacts','theme','logo','font','textcolor','members','footimg','mapimage','categories'));
    }
    
}

public function applymember(){

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
      $members = members::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.applymember', compact('contact','contacts','theme','logo','font','textcolor','members','footimg','mapimage','categories'));

    }else{

      $user = User::where('id',Auth::id())->first();
      // $user = User::where('id',1)->first();
      $contact  = DB::table('contacts')->where('user_id', Auth::id())->get();


      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $textcolor = $user->textcolor;
      $members = members::paginate(15);
      $footimg = $user->footimg;
      $mapimage = $user->mapimage;
      $categories = category::all();

      return view('frontView.home.applymember', compact('contact','contacts','theme','logo','font','textcolor','members','footimg','mapimage','categories'));
    }}


}
