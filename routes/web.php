<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use App\Http\Middleware\guest_doctor;
use App\Http\Middleware\auth_doctor;
use App\Http\Middleware\guest_admin;
use App\Http\Middleware\auth_admin;
use App\Http\Middleware\guest_patient;
use App\Http\Middleware\auth_patient;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['middleware'=>'mymiddleware'] , function(){

// });



Route::get('/', function () {
    return view('index');
});
Route::get('/login_as', function () {
    return view('login_as');
});



Route::group(['middleware' => 'guest_doctor'], function(){

    // display login page
    Route::get('/doctor_login', function(){
        return view('doctor_login');
    });
    
    // handle login request
    Route::post('/doctor_login', function(Request $request){
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from doctors where doctor_email = ? and doctor_password = ?', [$email, $password]);
        if($result){
            // dd($result);
            $doctor_user = $result[0];
            // dd($doctor_user);
            // session()->regenerate();
            session([
                'loggedIn'=>true,
                'doctor_id'=>$doctor_user->doctor_id,
                'Name'=>$doctor_user->Name,
                'user'=>$doctor_user
            ]);
            return redirect("/doctor_profile");
        } 
        else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });
});


/********************** Authenticated user **************************/

Route::group(['middleware' => 'auth_doctor'], function(){
    
    // display profile page
    Route::get('/doctor_profile', function(){
        return view('doctor_profile');
    });    
    
    Route::post('/patient-search', function(Request $request){
        $search = $request->search_patient;
        $result = DB::select('select * from patient where patient_id = ?', [$search]);
        if($result){
            $patient = $result[0];
            session()->regenerate();
            session([
                'patient'=> $patient
            ]);
            return redirect("/doctor_profile");
        } 
        else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });
    

    Route::post('/patient-update', function(Request $request){
        $rays = $request->rays;
        $diagnosis = $request->diagnosis;
        $date_of_entry = $request->date_of_entry;
        $patient_id = $request->patient_id;
        $result = DB::update('update patient set Rays = ?, Diagnosis = ?,  date_of_entry = ? where patient_id = ?', [$rays, $diagnosis, $date_of_entry, $patient_id]);
        if($result){
            return redirect("/doctor_profile");
        } else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });

    // logout
    Route::get('/doctor_logout', function(){
        session()->invalidate();
        return back()->withInput();
    });
});

//-----------------------------------------------------------//



Route::group(['middleware' => 'guest_admin'], function(){

    // display login page
    Route::get('/it_admin_login', function(){
        return view('it_admin_login');
    });

    // handle login request
    Route::post('/it_admin_login', function(Request $request){
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from IT_Admin where ITemail = ? and ITpassword = ?', [$email, $password]);
        // dd($result);
        if($result){
            // dd($result);
            $it_user = $result[0];
            // dd($it_user);
            session()->regenerate();
            session([
                'loggedIn'=>true,
                'userId'=>$it_user->id,
                'userName'=>$it_user->Name,
                'user'=>$it_user
            ]);
            return redirect("/it_admin_profile")->with('it_user',$it_user);
        } 
        else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });
});


/********************** Authenticated user **************************/

Route::group(['middleware' => 'auth_admin'], function(){
    
    // display profile page
    Route::get('/it_admin_profile', function(){
        return view('it_admin_profile');
    });    
    
    // logout
    Route::get('/admin_logout', function(){
        session()->flush();
        return back()->withInput();
    });
});







//-----------------------------------------------------------//





Route::group(['middleware' => 'guest_patient'], function(){

    // display login page
    Route::get('/patient_login', function(){
        return view('patient_login');
    });
    
    // handle login request
    Route::post('/patient_login', function(Request $request){
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from patient where patient_email = ? and patient_password = ?', [$email, $password]);
        if($result){
            $patient_user = $result[0];
            session()->regenerate();
            session([
                'loggedIn'=>true,
                'userId'=>$patient_user->patient_id,
                'userName'=>$patient_user->Name,
                'user'=>$patient_user
            ]);
            return redirect("/patient_profile");
        } 
        else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });
});


/********************** Authenticated user **************************/

Route::group(['middleware' => 'auth_patient'], function(){
    
    // display profile page
    Route::get('/patient_profile', function(){
        return view('patient_profile');
    });    
    
    // logout
    Route::get('/patient_logout', function(){
        session()->invalidate();
        return back()->withInput();
    });
});






//-----------------------------------------------------------//



Route::group(['middleware' => 'guest_nurse'], function(){

    // display login page
    Route::get('/nurse_login', function(){
        return view('nurse_login');
    });
    
    // handle login request
    Route::post('/nurse_login', function(Request $request){
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from Nurse where Nurse_email = ? and Nurse_password = ?', [$email, $password]);
        if($result){
            $nurse_user = $result[0];
            session()->regenerate();
            session([
                'loggedIn'=>true,
                'userId'=>$nurse_user->nurse_id,
                'userName'=>$nurse_user->Name,
                'user'=>$nurse_user
            ]);
            return redirect("/nurse_profile");
        } 
        else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });
});



































/********************** Authenticated user **************************/

Route::group(['middleware' => 'auth_nurse'], function(){
    
    // display profile page
    Route::get('/nurse_profile', function(){
        return view('nurse_profile');
    });    
    


    Route::post('/nurse_patient_search', function(Request $request){
        $search = $request->nurse_search_patient;
        $result = DB::select('select * from patient where patient_id = ?', [$search]);
        if($result){
            $patient = $result[0];
            session()->regenerate();
            session([
                'patient'=> $patient
            ]);
            return redirect("/doctor_profile");
        } 
        else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });
    

    Route::post('/nurse_patient_update', function(Request $request){
        $Cholstrole = $request->Cholstrole;
        $blood_pressure = $request->blood_pressure;
        $blood_sugar_level = $request->blood_sugar_level;
        $patient_id = $request->patient_id;
        $result = DB::update('update patient set Cholstrole = ?, blood_pressure = ?,  blood_sugar_level = ? where patient_id = ?', [$Cholstrole, $blood_pressure, $blood_sugar_level, $patient_id]);
        if($result){
            return redirect("/doctor_profile");
        } else{
            return back()->with(['error' => 'Wrong email or password'])->withInput();
        }
        
    });




    // logout
    Route::get('/nurse_logout', function(){
        session()->invalidate();
        return back()->withInput();
    });
});













