<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Image;
use App\Models\ServiceProduct;
use Illuminate\Http\Request;

class ServiceProductController extends Controller
{
    use UploadImageTrait;
    //
    public function index()
    {
        $servicesProducts = ServiceProduct::all();
        return view('backend.pages.servicesProducts.index', compact('servicesProducts'));

    }
    public function create()
    {
        return view('backend.pages.servicesProducts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'active' => 'required|boolean',
            'main_page' => 'required|boolean',
            'content' => 'required|string',
            'icon' => 'nullable',
            'image' => 'required'
        ], [
            'type.required' => 'حقل النوع مطلوب',
            'title.required' => 'حقل العنوان مطلوب',
            'main_image.required' => 'حقل الصفحة الرئيسية مطلوب',
            'active.required' => 'حقل النشط مطلوب',
            'content.required' => 'حقل المحتوى مطلوب',
            'image.required' => ' حقل الصورة مطلوب',
        ]);

        $validatedData['image'] = $this->ProcessImage($request, 'image', 'servicesProducts');
        // dd($validatedData);
        ServiceProduct::create($validatedData);
        return redirect()->route('admin.servicesProducts.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');
    }

    public function edit($id)
    {
        $serviceProduct = ServiceProduct::findOrFail($id);
        return view('backend.pages.servicesProducts.edit', compact('serviceProduct'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'title' => 'required|string',
            'active' => 'required|boolean',
            'main_page' => 'required|boolean',
            'content' => 'required|string',
            'icon' => 'nullable',
            'image' => 'sometimes'
        ], [
            'type.required' => 'حقل النوع مطلوب',
            'title.required' => 'حقل العنوان مطلوب',
            'main_image.required' => 'حقل الصفحة الرئيسية مطلوب',
            'active.required' => 'حقل النشط مطلوب',
            'content.required' => 'حقل المحتوى مطلوب',
        ]);
        $serviceProduct = ServiceProduct::findOrFail($id);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'servicesProducts', null, null, $serviceProduct->image);
        $serviceProduct->update($validatedData);
        return redirect()->route('admin.servicesProducts.index')->with('toast_success', 'تم تعديل خدنة / منتج بنجاح');


    }
    public function destroy($id)
    {
        $serviceProduct = ServiceProduct::findOrFail($id);
        $serviceProduct->delete();
        return redirect()->route('admin.servicesProducts.index')->with('toast_error', 'تم حذف خدمة / منتج بنجاح');
    }


    public function addImage(Request $request, $id)
    {
        // dd($request->all(), $id);
        $request->validate([
            "image" => "required"
        ]);
        // $serviceProduct = ServiceProduct::findOrFail($id);
        $image = new Image();
        $image->service_product_id = $id;
        $image->type = 'service_product_image';
        $image->image = $this->ProcessImage($request, 'image', 'images');
        $image->save();

        return redirect()->route('admin.servicesProducts.index')->with('toast_success', 'تم أضافة صورة خدمة / منتج بنجاح');

    }
}
