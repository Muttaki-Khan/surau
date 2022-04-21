<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lectures;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\contacts;
use App\staffs;
use App\item;
use App\about;
use App\category;
use App\exhibition;


class LectureController extends Controller
{
   
      
     public function index(){

     
      return view('admin.lecture.lectureEntry'); 
  }  


    public function save(Request $request){

        $lecture = new lectures();


        $lecture->video_title = $request->video_title;
        $lecture->lecturer_name = $request->lecturer_name;
        $lecture->video_link = $request->video_link;

        $lecture->save();

        return redirect('/lecture/entry')->with('message','Data insert successfully.');



    }
  public function manage(){

      $lectures = DB::table('lectures')->get();

      return view('admin.lecture.lectureManage',['lecture'=>$lectures]);
  }

  public function edit($id){

      $lectureEdit = lecture::where('id',$id)->first();
      return view('admin.lecture.lectureEdit',['lecture'=>$lectureEdit]);
  }

  public function update(Request $request){

      

      $lecture= lecture::find($request->lecture_id);
      
      $lecture->video_title = $request->video_title;
      $lecture->lecturer_name = $request->lecturer_name;
      $lecture->video_link= $request->video_link;    

      $lecture->save();

      return redirect('/lecture/manage')->with('message','Updated successfully.');

  }

  public function delete($id){

      $lectureDelete = lecture::find($id);
      $lectureDelete->delete();
      

      return redirect('/lecture/manage')->with('message','Deleted successfully.');
  }


  public function videoLecture(){
    $museum_id = session('museum_id', '1');
    // $contacts = contacts::where('id',1)->first();

    $is_admin = true;
    if(Auth::user()==null) {
      $is_admin=false;
    } else if(User::where('id',Auth::id())->first()->role_id==2) {
      $is_admin=false;
    }
    if($is_admin==false) {
      $user = User::where('id',$museum_id)->first();
      $lecture = DB::table('lectures')->get();
      if(DB::table('contacts')->where('user_id')->exists()){

        $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
      }else{
        $contacts = DB::table('contacts')->where('user_id',1)->first();

      }
        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        return view('frontView.home.video', compact('lecture','theme','logo','font','textcolor','categories','footimg','contacts'));

      }else{
        $lecture = Lectures::find($id);

        $user = User::where('id',Auth::id())->first();
        // $user = User::where('id',1)->first();
        $lecture = DB::table('lectures')->get();
        if(DB::table('contacts')->where('user_id')->exists()){

          $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
        }else{
          $contacts = DB::table('contacts')->where('user_id',1)->first();

        } 
        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        return view('frontView.home.video', compact('lecture','contacts','theme','logo','font','textcolor','categories','footimg'));
      }
      // return view('frontView.home.video',compact('video'));
  }

  public function videoLectureById($id){
    $museum_id = session('museum_id', '1');
    $user = User::where('id',1)->first();
    $lecture = lectures::find($id);

    $theme = $user->theme;
    $logo = $user->logo;
    $font = $user->font;
    $img1 = $user->img1;
    $img2 = $user->img2;
    $img3 = $user->img3;
    $textcolor = $user->textcolor;
    $latest = DB::table('items')->orderBy('id', 'desc')->where('user_id',1)->skip(0)->take(1)->get();
    $latest2 = DB::table('items')->orderBy('id', 'desc')->where('user_id',1)->skip(1)->take(1)->get();
    $latest3 = DB::table('items')->orderBy('id', 'desc')->where('user_id',1)->skip(2)->take(1)->get();
    $categories = category::all();
    $footimg = $user->footimg;
    $contacts = contacts::where('id',1)->first();

    return view('frontView.home.lectureById', compact('contacts','id','lecture','theme','logo','font','img1','img2','img3','textcolor','latest','latest2','latest3','categories','footimg'));
  }
  
  



}
    
   
    

