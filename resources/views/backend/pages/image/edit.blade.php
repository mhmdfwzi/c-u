@extends('backend.layouts.master')

@section('title')
    Edit image
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit image</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit image</li>
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
                    <form method="post" enctype="multipart/form-data"
                        action="{{ Route('admin.images.update', $image->id) }}" autocomplete="off">

                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type"> Type </label>
                                        <select name="type" id="type" class="custom-select mr-sm-2">
                                            <option value="main_image" @selected($image->type == 'main_image')>Main Image</option>
                                            <option value="about_image" @selected($image->type == 'about_image')>About Image</option>
                                            {{-- <option value="service_product_image">Service Product Image</option> --}}
                                        </select>
                                        @error('type')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
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
                                    <img src="{{ $image->image_url }}" height="200" width="200" class="img-fluid"
                                        id="frame" />
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-success btn-md nextBtn btn-lg ">Edit Gallery</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@push('scripts')
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endpush
