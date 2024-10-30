<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    use UploadImageTrait;
    //
    public function index(){
        $clients = Clients::all();
        return view('backend.pages.clients.index',compact('clients'));
        
    }
    public function create(){
        return view('backend.pages.clients.create');
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'name'=>'required|string', 
            'image'=>'required'
        ],[
            'name.required'=>'أسم العميل مطلوب', 
            'image.required'=>'صورة العميل مطلوب'
        ]);
        $validatedData['image'] = $this->ProcessImage($request,'image','clients');
        Clients::create($validatedData);
        return redirect()->route('admin.clients.index')->with('toast_success','تم أنشاء العميل بنجاح');
    }

    public function edit($id){
        $clients = Clients::findOrFail($id);
        return view('backend.pages.clients.edit',compact('clients'));
    }
    public function update(Request $request , $id){
        $validatedData= $request->validate([
            'name'=>'required|string', 
            'image'=>'required'
        ],[
            'name.required'=>'أسم العميل مطلوب', 
            'image.required'=>'صورة العميل  مطلوب'
        ]);
        $clients = Clients::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request,'image','clients',null,null,$request->image);
        $clients->update($validatedData);
        return redirect()->route('admin.clients.index')->with('toast_success','تم تعديل العميل بنجاح');
        
        
    }
    public function destroy($id){
        $clients = Clients::findOrFail($id);
        $clients->delete();
        return redirect()->route('admin.clients.index')->with('toast_error','تم حذف الصفحة بنجاح');
    }
    
}