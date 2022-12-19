<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Image;
use Hash;

class AdminController extends Controller
{
    //admin login form
    public function index(){
        return view('admin.home.login');

    }//end method



    //admin post login
    public function postLogin(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }

        return redirect("/admin/login")->withSuccess('Oppes! You have entered invalid credentials');

    }//end method





    //admin dashboard
    public function adminDashboard(){
        return  view('admin.home.dashboard');
    }//end method


    //admin logout
    public function adminLogout(){
        Session::flush();
        Auth::logout();

        return Redirect('/admin/login');
    }//end method


    //manage user
    public function manageUser(){
        $users=User::all();
        return view('admin.user.user_manage',compact('users'));
    }//end method


    //create user form
    public function createUserForm(){
        return view('admin.user.user_create');
    }//end method


    //store user
    public function storeUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'photo'=>'required'
        ]);

        //image upload
        if($request->file('photo')){
            $image=$request->file('photo');

            $image_name=rand().''.$image->getClientOriginalName();

            $img = Image::make($image)->resize(770, 400)->save('upload/user_images/'.$image_name);

            $image_url='upload/user_images/'.$image_name;

        }

        $user=new User();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->photo=$image_url;

        $user->save();

        return redirect()->back()->with('message','User Created Successfully');
    }//end method


    //edit user
    public function editUser($id){
        $user=User::find($id);
        return view('admin.user.user_edit',compact('user'));
    }//end method


    //update user
    public function updateUser(Request $request){
        $user=User::find($request->id);

        $old_imaage=$user->photo;

         //image upload
         if($request->file('photo')){
            unlink($old_imaage);
            $image=$request->file('photo');

            $image_name=rand().''.$image->getClientOriginalName();

            $img = Image::make($image)->resize(770, 400)->save('upload/user_images/'.$image_name);

            $image_url='upload/user_images/'.$image_name;

            $user->photo=$image_url;

        }



        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;





        // $hashedPassword=User::find($request->id)->password;
        // if(Hash::check($request->password,$hashedPassword)){
        //     $user=User::find($request->id);
        //     $user->password=Hash::make($request->password);
        // }


        $user->save();

        return redirect('/manage/user')->with('message','User Updated Successfully');
    }//end method


    //delete user
    public function deleteUser($id){
        $user=User::find($id);
        unlink($user->photo);
        $user->delete();
        return redirect('/manage/user')->with('message','User Deleted Successfully');
    }//end method


    //user profile show
    public function userProfileShow($id){
        $user=User::find($id);

        Session::put('user_profile_url',request()->fullUrl());
        return view('admin.user.user_profile_show',compact('user'));
    }//end method


    //user profile edit
    public function userProfileEdit($id){
        $user=User::find($id);

        return view('admin.user.user_profile_edit',compact('user'));
    }//end method


    //update user profile
    public function userProfileUpdate(Request $request){
        $user=User::find($request->id);


        $old_imaage=$user->photo;

         //image upload
         if($request->file('photo')){
            unlink($old_imaage);
            $image=$request->file('photo');

            $image_name=rand().''.$image->getClientOriginalName();

            $img = Image::make($image)->resize(770, 400)->save('upload/user_images/'.$image_name);

            $image_url='upload/user_images/'.$image_name;

            $user->photo=$image_url;

        }



        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;





        // $hashedPassword=User::find($request->id)->password;
        // if(Hash::check($request->password,$hashedPassword)){
        //     $user=User::find($request->id);
        //     $user->password=Hash::make($request->password);
        // }


        $user->save();

        if(session('user_profile_url')){
            return redirect(session('user_profile_url'))->with('message','User Profile Updated Successfully');
        } else{
            return redirect('/admin/dashboard')->with('message','User Profile Updated Successfully');
        }


    }//end method





}//end class
