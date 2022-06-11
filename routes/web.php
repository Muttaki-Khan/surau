<?php
use App\User;
use App\item;
use App\members;
use App\contacts;
use App\lectures;
use App\category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes();


//============= Search =============//
 Route::get('/search', 'SearchController@searchitem')->name('search');



//=============  User =============//
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/home', function(){
        if(Auth::user()->role_id ==1 ){
			$user = User::where('id',Auth::id())->first();
       
            return view('admin.home.homeContent', compact('user'));
        
        } else{
			$user = User::where('id',1)->first();
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
			$members = members::all();
			$categories = category::all();
			$footimg = $user->footimg;
			$contacts = contacts::where('id',1)->first();

            return view('frontView.home.homeContent', compact('categories','contacts','theme','logo','font','img1','img2','img3','textcolor','latest','latest2','latest3','members','footimg'));
        }
    });
});

Route::post('/museums', 'FrontController@chooseMuseum')->name('museums');

// Route::get('/home', 'HomeController@index');


Route::get('/','FrontController@index');

Route::get('/index','FrontController@testing');


Route::get('/mainhome','MainHomeController@main');



Route::get('/staff', 'FrontController@staff');

Route::get('/item', 'FrontController@item');
// Route::get('view/{id}','FrontController@singleItem');
Route::get('/{id}','FrontController@singleItem')->where('id','[0-9]+');




Route::get('/item', 'FrontController@item');
Route::get('/introduction', 'FrontController@aboutIntro');

Route::get('/goals', 'FrontController@aboutGoal');


//============= Home.Contact =============
Route::get('/contact', 'FrontController@contact');

//============= Home.Lecture =============
Route::get('/video', 'LectureController@videoLecture');
Route::get('/lectureById={id}', 'LectureController@videoLectureById')->where('id','[0-9]+');

//============= Home.Donation =============
Route::get('/donation', 'FrontController@donationIntro');

Route::post('/incomingdonation', 'DonationController@incomingdonation');

//============= Home.Member =============
Route::get('/member', 'MemberController@member');

Route::get('/applymember', 'MemberController@applymember');


//============= Home.Museums =============
Route::get('/museums', 'FrontController@museums');





//============= Admin.Contact =============//
Route::get('/info2','ContactController@index');

Route::post('/newInfo2','ContactController@store');

Route::get('/contact/edit/{id}',[
	'uses' => 'ContactController@edit',
	'as'   => 'contact.edit'
]);

Route::post('/contact/update/{id}',[
	'uses' => 'ContactController@update',
	'as'   => 'contact.update'
]);

Route::get('/contact/delete/{id}',[
	'uses' => 'ContactController@destroy',
	'as'   => 'contact.delete'
]);





//============= Admin.Applymember =============
Route::post('/newMember','ApplyMemberController@store');

Route::get('/showMember','ApplyMemberController@index');

Route::get('/readMember','ApplyMemberController@trashed');

Route::get('/member/delete{id}',[
	'uses' => 'ApplyMemberController@destroy',
	'as'   => 'member.delete'
]);

Route::get('/member/kill/{id}',[
	'uses' => 'ApplyMemberController@kill',
	'as'   => 'member.kill'
]);


//============= Admin.Applydonation =============
Route::get('/listdonations','DonationController@listdonations');
Route::get('/listdonations/delete/{id}','DonationController@indelete');


Route::post('/newDonation','ApplyDonationController@store');

Route::get('/showDonation','ApplyDonationController@index');
Route::get('/showDonation/view/{id}','ApplyDonationController@show');

Route::get('/readDonation','ApplyDonationController@trashed');

Route::get('/donation/delete{id}',[
	'uses' => 'ApplyDonationController@destroy',
	'as'   => 'donation.delete'
]);

Route::get('/donation/kill/{id}',[
	'uses' => 'ApplyDonationController@kill',
	'as'   => 'donation.kill'
]);



//============= Admin.Message =============
Route::post('/newMsg','MessageController@store');

Route::get('/showMsg','MessageController@index');

Route::get('/readMsg','MessageController@trashed');

Route::get('/msg/delete/{id}',[
	'uses' => 'MessageController@destroy',
	'as'   => 'msg.delete'
]);

Route::get('/msg/kill/{id}',[
	'uses' => 'MessageController@kill',
	'as'   => 'msg.kill'
]);




	//============= Admin.About =============
	Route::get('/about/entry', 'AboutController@index');
    Route::post('/about/entry', 'AboutController@save');
    Route::get('/about/manage','AboutController@manage');
	Route::get('/about/edit/{id}','AboutController@edit');
	Route::post('/about/edit','AboutController@update');
	Route::get('/about/delete/{id}','AboutController@delete');

	//============= Admin.Staff =============
	Route::get('/staff/entry','StaffController@index');
	Route::post('/staff/entry','StaffController@save');
	Route::get('/staff/manage','StaffController@manage');
	Route::get('/staff/view/{id}','StaffController@singleStaff');
	Route::get('/staff/edit/{id}','StaffController@editStaff');
	Route::post('/staff/edit','StaffController@updateStaff');
	Route::get('/staff/delete/{id}','StaffController@deleteStaff');


		//============= Admin.Lecture Video =============
	Route::get('/lecture/entry', 'LectureController@index');
    Route::post('/lecture/entry', 'LectureController@save');
    Route::get('/lecture/manage','LectureController@manage');
	Route::get('/lecture/edit/{id}','LectureController@edit');
	Route::post('/lecture/edit','LectureController@update');
	Route::get('/lecture/delete/{id}','LectureController@delete');

	
	//themecontrol
	Route::get('/theme/manage','ThemeController@manage');
	Route::get('/theme/color/edit/{id}','ThemeController@color');
	Route::post('/theme/color/edit','ThemeController@savecolor');
	Route::get('/theme/logo/edit/{id}','ThemeController@logo');
	Route::post('/theme/logo/edit','ThemeController@savelogo');
	Route::get('/theme/font/edit/{id}','ThemeController@font');
	Route::post('/theme/font/edit','ThemeController@savefont');
	Route::get('/theme/image/edit/{id}','ThemeController@image');
	Route::post('/theme/image/edit','ThemeController@saveimage');
	Route::get('/theme/textcolor/edit/{id}','ThemeController@textcolor');
	Route::post('/theme/textcolor/edit','ThemeController@savetextcolor');
	Route::get('/theme/footimage/edit/{id}','ThemeController@footimage');
	Route::post('/theme/footimage/edit','ThemeController@savefootimage');
	Route::get('/theme/mapimage/edit/{id}','ThemeController@mapimage');
	Route::post('/theme/mapimage/edit','ThemeController@savemapimage');
	Route::get('/theme/colablink/edit/{id}','ThemeController@colablink');
	Route::post('/theme/colablink/edit','ThemeController@savecolablink');




	//============= Admin.Donation =============
	Route::get('/donation/entry', 'DonationController@index');
    Route::post('/donation/entry', 'DonationController@save');
    Route::get('/donation/manage','DonationController@manage');
	Route::get('/donation/edit/{id}','DonationController@edit');
	Route::post('/donation/edit','DonationController@update');
	Route::get('/donation/delete/{id}','DonationController@delete');


	//============= Admin.member =============
	Route::get('/member/entry','MemberController@index');
	Route::post('/member/entry','MemberController@save');
	Route::get('/member/manage','MemberController@manage');
	Route::get('/member/edit/{id}','MemberController@edit');
	Route::post('/member/edit','MemberController@update');
	Route::get('/member/delete/{id}','MemberController@delete');

	//============= Admin.Item =============
	Route::get('/item/entry','ItemController@index');
	Route::post('/item/entry','ItemController@save');
	Route::get('/item/manage','ItemController@manage');
	Route::get('/item/view/{id}','ItemController@singleItem');
	Route::get('/item/edit/{id}','ItemController@editItem');
	Route::post('/item/edit','ItemController@updateItem');
	Route::get('/item/delete/{id}','ItemController@deleteItem');





