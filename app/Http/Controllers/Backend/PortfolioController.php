<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    use UploadImageTrait;
    //
    public function index(){
        $portfolio = Portfolio::all();
        return view('backend.pages.portfolio.index',compact('portfolio'));
        
    }
    public function create(){
        return view('backend.pages.portfolio.create');
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'title'=>'required',
            'address'=>'required',
            'content'=>'required',
            'image'=>'required'
        ],[
            'title.required'=>'حقل العنوان مطلوب',
            'address.required'=>'حقل عنوان مطلوب',
            'content.required'=>'حقل المحتوى مطلوب',
            'image.required'=>' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request,'image','portfolio');
        Portfolio::create($validatedData);
        return redirect()->route('admin.portfolio.index')->with('toast_success','تم أنشاء portfolio بنجاح');
    }

    public function edit($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.pages.portfolio.edit',compact('portfolio'));
    }
    public function update(Request $request , $id){
        $validatedData= $request->validate([
            'title'=>'required|string',
            'address'=>'required|string',
            'content'=>'required|string',
            'image'=>'sometime|file'
        ],[
            'title.required'=>'حقل العنوان مطلوب',
            'address.required'=>'حقل عنوان مطلوب',
            'content.required'=>'حقل المحتوى مطلوب',
            'image.required'=>' حقل الصورة مطلوب',
        ]);
        $portfolio = Portfolio::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request,'image','portfolio',null,null,$portfolio->image);
        $portfolio->update($validatedData);
        return redirect()->route('admin.portfolio.index')->with('toast_success','تم تعديل portfolio بنجاح');
        
        
    }
    public function destroy($id){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('toast_error','تم حذف portfolio بنجاح');
    }
}