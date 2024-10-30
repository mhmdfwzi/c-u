<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Keyword;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PageController extends Controller
{
    use UploadImageTrait;
    //
    public function index(){
        $pages = Page::all();
        return view('backend.pages.pages.index',compact('pages'));
        
    }
    public function create(){
        return view('backend.pages.pages.create');
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'title'=>'required|string',
            'keywords'=>'nullable|string',
            'active'=>'required|boolean',
            'content'=>'required|string',
            'image'=>'required'
        ],[
            'title.required'=>'حقل العنوان مطلوب',
            'active.required'=>'حقل النشط مطلوب',
            'content.required'=>'حقل المحتوى مطلوب',
            'image.required'=>' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request,'image','pages');
        $page = Page::create($validatedData);
        
        
        return redirect()->route('admin.pages.index')->with('toast_success','تم أنشاء الصفحة بنجاح');
    }

    public function edit($id){
        $page = Page::findOrFail($id);
        return view('backend.pages.pages.edit',compact('page'));
    }
    public function update(Request $request , $id){
        $validatedData= $request->validate([
            'title'=>'required|string',
            'active'=>'required|boolean',
            'keywords'=>'nullable|string',
            'content'=>'required|string',
            'image'=>'sometimes'
        ],[
            'title.required'=>'حقل العنوان مطلوب',
            'active.required'=>'حقل النشط مطلوب',
            'content.required'=>'حقل المحتوى مطلوب',
        ]);
        $page = Page::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request,'image','pages',null,null,$page->image);
        $page->update($validatedData);
        
      
        return redirect()->route('admin.pages.index');
        
        
    }
    public function destroy($id){
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()->route('admin.pages.index')->with('toast_error','تم حذف الصفحة بنجاح');
    }
}