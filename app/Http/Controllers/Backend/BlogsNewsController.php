<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\BlogNews;
use Illuminate\Http\Request;

class BlogsNewsController extends Controller
{
    //
    use UploadImageTrait;
    //
    public function index()
    {
        $blogsNews = BlogNews::all();
        return view('backend.pages.blogsNews.index', compact('blogsNews'));

    }
    public function create()
    {
        return view('backend.pages.blogsNews.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'active' => 'required|boolean',
            'main_page' => 'required|boolean',
            'content' => 'required|string',
            'image' => 'required'
        ], [
            'type.required' => 'حقل النوع مطلوب',
            'title.required' => 'حقل العنوان مطلوب',
            'main_image.required' => 'حقل الصفحة الرئيسية مطلوب',
            'active.required' => 'حقل النشط مطلوب',
            'content.required' => 'حقل المحتوى مطلوب',
            'image.required' => ' حقل الصورة مطلوب',
        ]);

        $validatedData['image'] = $this->ProcessImage($request, 'image', 'blogsNews');
        BlogNews::create($validatedData);
        return redirect()->route('admin.blogsNews.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');
    }

    public function edit($id)
    {
        $blogNews = BlogNews::findOrFail($id);
        return view('backend.pages.blogsNews.edit', compact('blogNews'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'active' => 'required|boolean',
            'main_page' => 'required|boolean',
            'content' => 'required|string',
            'image' => 'sometimes'
        ], [
            'type.required' => 'حقل النوع مطلوب',
            'title.required' => 'حقل العنوان مطلوب',
            'main_image.required' => 'حقل الصفحة الرئيسية مطلوب',
            'active.required' => 'حقل النشط مطلوب',
            'content.required' => 'حقل المحتوى مطلوب',
        ]);
        $blogNews = BlogNews::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'blogsNews', null, null, $blogNews->image);
        $blogNews->update($validatedData);
        return redirect()->route('admin.blogsNews.index')->with('toast_success', 'تم تعديل خدنة / منتج بنجاح');


    }
    public function destroy($id)
    {
        $blogNews = BlogNews::findOrFail($id);
        $blogNews->delete();
        return redirect()->route('admin.blogsNews.index')->with('toast_error', 'تم حذف خدمة / منتج بنجاح');
    }
}
