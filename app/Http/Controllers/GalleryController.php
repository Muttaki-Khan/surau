<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\contacts;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\category;
use DB;
class GalleryController extends Controller
{
       
        			 
  public function gallery(){
        
    $imges = DB::table('items')->orderBy('id')->Paginate(2);
    $contacts = contacts::where('id',1)->first();

    if(Auth::user()==null){
        $user = User::where('id',1)->first();
        $latest = item::latest()->first();
        $latest = $latest->pic;
        $contacts = DB::table('contacts')->where('user_id',1)->first();
        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        
        return view('frontView.home.gallery', compact('imges','contacts','theme','logo','font','textcolor','categories','footimg',));

      }else{


        $user = User::where('id',1)->first();
        $contacts = DB::table('contacts')->where('user_id',1)->first();

        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        return view('frontView.home.gallery', compact('imges','theme','logo','font','textcolor','categories','footimg'));
      }

}
}