<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('backend.pages.users.index',compact('users'));
        
    }
    public function create(){
        $roles = Role::pluck('name','name')->all();
        return view('backend.pages.users.create',compact('roles'));
        
    }

    public function store(Request $request){
        $validateDate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'roles' => 'nullable'
        ],[
            'name.required'=>'حقل الأسم مطلوب',
            'email.required'=>'حقل البريد الألكترونى مطلوب',
            'password.required'=>'حقل كلمة المرور مطلوب',
        ]);
        $validateDate['password'] = Hash::make($validateDate['password']);
    
        $user = User::create($validateDate);
        
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')->with('toast_success','تم أضافة مستخدم بنجاح');
        
    }

    public function edit($id){
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('backend.pages.users.edit',compact('user','roles','userRole'));
        
    }
    public function update(Request $request , $id){
        $validateDate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'string|min:8|max:255',
            'roles' => 'nullable'
        ],[
            'name.required'=>'حقل الأسم مطلوب',
            'email.required'=>'حقل البريد الألكترونى مطلوب',
        ]);
        if(!empty($validateDate['password'])){ 
            $validateDate['password'] = Hash::make($validateDate['password']);
        }else{
            $validateDate = Arr::except($validateDate,array('password'));    
        }

        $user = User::findOrFail($id);
        $user->update($validateDate);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')->with('toast_success','تم تعديل المستخدم بنجاح');

    
    }
    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('admin.users.index')->with('toast_error','تم حذف المستخدم بنجاح');

    }
}