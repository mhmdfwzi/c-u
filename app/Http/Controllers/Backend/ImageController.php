<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $images = Image::all();
        return view('backend.pages.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.pages.image.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            "type" => "required",
            "image" => "required"
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'images');
        Image::create($validatedData);

        return redirect()->route('admin.images.index')->with('toast_success', 'تم أنشاء الصورة بنجاح');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $image = Image::findOrFail($id);

        return view('backend.pages.image.edit', compact('image'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $image = Image::findOrFail($id);

        $validatedData = $request->validate([
            "type" => "required",
            "image" => "required"
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'images', null, null, $image->image);
        $image->update($validatedData);

        return redirect()->route('admin.images.index')->with('toast_success', 'تم تعديل الصورة بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect()->route('admin.images.index')->with('toast_success', 'تم حذف الصورة بنجاح');

    }
}
