<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    use UploadImageTrait;
    //
    public function index(){
        $gallery = Gallery::all();
        return view('backend.pages.gallery.index',compact('gallery'));
        
    }
    public function create(){
        return view('backend.pages.gallery.create');
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'title'=>'nullable|string',
            'sub_title'=>'nullable|string',
            'image'=>'required'
        ],[
            'image.required'=>'الصورة مطلوب'
        ]);
        $validatedData['image'] = $this->ProcessImage($request,'image','gallery');
        $gallery = Gallery::create($validatedData);
        
        
        return redirect()->route('admin.gallery.index')->with('toast_success','تم أنشاء الصورة بنجاح');
    }

    public function edit($id){
        $gallery = Gallery::findOrFail($id);
        return view('backend.pages.gallery.edit',compact('gallery'));
    }
    public function update(Request $request , $id){
        $validatedData= $request->validate([
            'title'=>'nullable|string',
            'sub_title'=>'nullable|string',
            'image'=>'sometimes'
        ],[
            'image.required'=>'الصورة مطلوب'
        ]);
        $gallery = Gallery::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request,'image','gallery',null,null,$gallery->image);
        $gallery->update($validatedData);
        
        return redirect()->route('admin.gallery.index')->with('toast_success','تم تعديل الصورة بنجاح');
        
        
    }
    public function destroy($id){
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('toast_error','تم حذف الصورة بنجاح');
    }
}