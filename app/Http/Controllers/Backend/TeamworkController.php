<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Teamwork;
use Illuminate\Http\Request;

class TeamworkController extends Controller
{
    use UploadImageTrait;
    //
    public function index(){
        $teamwork = Teamwork::all();
        return view('backend.pages.teamwork.index',compact('teamwork'));
        
    }
    public function create(){
        return view('backend.pages.teamwork.create');
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'name'=>'required|string',
            'position'=>'required|string',
            'info'=>'required|string',
            'image'=>'required'
        ],[
            'name.required'=>'حقل الأسم مطلوب',
            'position.required'=>'حقل الوظيفة مطلوب',
            'info.required'=>'حقل المعلومات مطلوب',
            'image.required'=>' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request,'image','teamwork');
        Teamwork::create($validatedData);
        return redirect()->route('admin.teamwork.index')->with('toast_success','تم أنشاء الموظف بنجاح');
    }

    public function edit($id){
        $teamwork = Teamwork::findOrFail($id);
        return view('backend.pages.teamwork.edit',compact('teamwork'));
    }
    public function update(Request $request , $id){
        $validatedData= $request->validate([
            'name'=>'required|string',
            'position'=>'required|string',
            'info'=>'required|string',
            'image'=>'required'
        ],[
            'name.required'=>'حقل الأسم مطلوب',
            'position.required'=>'حقل الوظيفة مطلوب',
            'info.required'=>'حقل المعلومات مطلوب',
            'image.required'=>' حقل الصورة مطلوب',
        ]);
        $teamwork = Teamwork::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request,'image','teamwork',null,null,$request->image);
        $teamwork->update($validatedData);
        return redirect()->route('admin.teamwork.index')->with('toast_success','تم تعديل الموظف بنجاح');
        
        
    }
    public function destroy($id){
        $teamwork = Teamwork::findOrFail($id);
        $teamwork->delete();
        return redirect()->route('admin.teamwork.index')->with('toast_error','تم حذف الموظف بنجاح');
    }
}