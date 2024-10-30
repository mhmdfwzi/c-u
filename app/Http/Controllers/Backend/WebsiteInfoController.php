<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    public function index(){
        $websiteInfo = WebsiteInfo::all();
        return view('backend.pages.websiteInfo.index',compact('websiteInfo'));
        
    }

    public function show(){
        
    }

    public function create(){
        
        return view('backend.pages.websiteInfo.create');

    }


    public function store(Request $request){
        $validateData=$request->validate([
            'key'=>'required|string',
            'value'=>'nullable|string'
        ],[
            'key.required'=>'الأسم مطلوب'
        ]);
        WebsiteInfo::create($validateData);

        return redirect()->route('admin.websiteInfo.index')->with('toast_success','تم أنشاء معلومات الصفحة بنجاح');
        
    }

    public function edit($id){
        $websiteInfo = WebsiteInfo::findOrFail($id); 
        return view('backend.pages.websiteInfo.edit',compact('websiteInfo'));
    }

    public function update(Request $request , $id){
        $validateData=$request->validate([
            'key'=>'required|string',
            'value'=>'nullable|string'
        ],[
            'key.required'=>'الأسم مطلوب'
        ]);
        
        $websiteInfo = WebsiteInfo::findOrFail($id); 
        
        $websiteInfo->update($validateData);

        return redirect()->route('admin.websiteInfo.index')->with('toast_success','تم تعديل معلومات الصفحة بنجاح');
    }

    public function destroy($id){
        $websiteInfo = WebsiteInfo::findOrFail($id); 
        $websiteInfo->delete();
        return redirect()->route('admin.websiteInfo.index')->with('toast_error','تم حذف معلومات الصفحة بنجاح');
        
    }
}