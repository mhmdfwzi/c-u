<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MetaData;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
    //
    public function index(){
        $metaData = MetaData::all();
        return view('backend.pages.metaData.index',compact('metaData'));
        
    }

    public function show(){
        
    }

    public function create(){
        
        return view('backend.pages.metaData.create');

    }


    public function store(Request $request){
        $validateData=$request->validate([
            'key'=>'required|string',
            'value'=>'nullable|string'
        ],[
            'key.required'=>'الأسم مطلوب'
        ]);
        MetaData::create($validateData);

        return redirect()->route('admin.metaData.index')->with('toast_success','تم أنشاء ال meta data بنجاح');
        
    }

    public function edit($id){
        $metaData = MetaData::findOrFail($id); 
        return view('backend.pages.metaData.edit',compact('metaData'));
    }

    public function update(Request $request , $id){
        $validateData=$request->validate([
            'key'=>'required|string',
            'value'=>'nullable|string'
        ],[
            'key.required'=>'الأسم مطلوب'
        ]);
        
        $metaData = MetaData::findOrFail($id); 
        
        $metaData->update($validateData);

        return redirect()->route('admin.metaData.index')->with('toast_success','تم تعديل ال meta data بنجاح');
    }

    public function destroy($id){
        $metaData = MetaData::findOrFail($id); 
        $metaData->delete();
        return redirect()->route('admin.metaData.index')->with('toast_error','تم حذف ال meta data بنجاح');
        
    }
}