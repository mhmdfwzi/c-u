@extends('backend.layouts.master')

@section('title')
    تعديل الصفحة
@endsection

@push('style')
    <link href="{{ asset('backend/assets/tagify/tagify.css') }}" rel="stylesheet">
@endpush

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">تعديل الصفحة</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">تعديل الصفحة</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <form method="post" enctype="multipart/form-data" action="{{ Route('admin.pages.update', $page->id) }}"
                        autocomplete="off">

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">عنوان الصفحة</label>
                                    <input name="title" id="title" type="text" value="{{ $page->title }}"
                                        class="form-control" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="keywords">keywords</label>
                                    <input type="text" class="form-control" id="keywords" value="{{ $page->keywords }}"
                                        name="keywords" />
                                    @error('keywords')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="active"> نشط </label>
                                    <select name="active" id="active" class="custom-select mr-sm-2">
                                        <option value="1" @selected($page->active == '1')>نشط</option>
                                        <option value="0" @selected($page->active == '0')>غير نشط</option>
                                    </select>
                                    @error('active')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="summernote"
                                        class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        id="message" name="content">
                                    {{ $page->content }}
                                </textarea>
                                    @error('content')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        {{-- Image input --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الصورة<span class="text-danger">*</span></label>
                                    <div class="avatar-img">

                                        <input onchange="preview()" type="file" name="image" accept="image/*"
                                            id="upload-photo" />
                                    </div>
                                    @error('image')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border rounded-lg text-center p-3">
                                    <img src="{{ $page->image_url }}" height="200" width="200" class="img-fluid"
                                        id="frame" />
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-success btn-md nextBtn btn-lg ">تعديل صفحة</button>


                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- row closed -->
@endsection
@push('scripts')
    {{-- Tagify --}}
    <script src="{{ asset('backend/assets/tagify/tagify.js') }}"></script>
    <script src="{{ asset('backend/assets/tagify/tagify.polyfills.min.js') }}"></script>

    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endpush
