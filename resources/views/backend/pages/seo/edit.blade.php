@extends('backend.layouts.master')

@section('title')
    Edit Seo Data
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Seo Data</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Seo Data</li>
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
                        action="{{ Route('admin.seo.update', $seoData->id) }}" autocomplete="off">
                        @method('PUT')
                        @csrf

                        <input name="entity_id" id="entity_id" hidden value="{{ $id }}" type="text" />

                        <input name="entity_type" id="entity_type" hidden value="{{ $type }}" type="text" />


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="title">Title </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="title" id="title" type="text" class="form-control"
                                                value="{{ $seoData->title }}" />
                                            @error('title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="meta_description">Meta Description </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="meta_description" id="meta_description" type="text"
                                                value="{{ $seoData->meta_description }}" class="form-control" />
                                            @error('meta_description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="keywords">Keywords </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="keywords" id="keywords" type="text"
                                                value="{{ $seoData->keywords }}" class="form-control" />
                                            @error('keywords')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="canonical_url">Canonical url </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="canonical_url" id="canonical_url" type="text"
                                                value="{{ $seoData->canonical_url }}" class="form-control" />
                                            @error('canonical_url')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Open Graph Metadata -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_title">OG Title </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_title" id="og_title" type="text" class="form-control"
                                                value="{{ $seoData->structured_data['og']['og_title'] ?? '' }}" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_description">OG Description </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_description" id="og_description" type="text"
                                                class="form-control"
                                                value="{{ $seoData->structured_data['og']['og_description'] ?? '' }}" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_image">OG Image </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_image" id="og_image" type="text" class="form-control"
                                                value="{{ $seoData->structured_data['og']['og_image'] ?? '' }}" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-3">
                                        <label for="og_url">OG URL </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_url" id="og_url" type="text" class="form-control"
                                                accordion value="{{ $seoData->structured_data['og']['og_url'] ?? '' }}" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_type">OG Type </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_type" id="og_type" type="text" class="form-control"
                                                value="{{ $seoData->structured_data['og']['og_type'] ?? '' }}" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_site_name">OG Site Name </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_site_name" id="og_site_name" type="text"
                                                value="{{ $seoData->structured_data['og']['og_site_name'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_updated_time">OG Updated Time </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_updated_time" id="og_updated_time" type="text"
                                                value="{{ $seoData->structured_data['og']['og_updated_time'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_image_secure_url">OG Image Secure Url </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_image_secure_url" id="og_image_secure_url" type="text"
                                                value="{{ $seoData->structured_data['og']['og_image_secure_url'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_image_height">OG Image height </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_image_height" id="og_image_height" type="text"
                                                value="{{ $seoData->structured_data['og']['og_image_height'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_image_width">OG Image Width </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_image_width" id="og_image_width" type="text"
                                                value="{{ $seoData->structured_data['og']['og_image_width'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_image_alt">OG Image Alt </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_image_alt" id="og_image_alt" type="text"
                                                value="{{ $seoData->structured_data['og']['og_image_alt'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="og_image_type">OG Image Type </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="og_image_type" id="og_image_type" type="text"
                                                value="{{ $seoData->structured_data['og']['og_image_type'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="article_publisher">Article Publisher</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="article_publisher" id="article_publisher" type="text"
                                                value="{{ $seoData->structured_data['article']['article_publisher'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="article_published_time">Article Published Time </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="article_published_time" id="article_published_time"
                                                value="{{ $seoData->structured_data['article']['article_published_time'] ?? '' }}"
                                                type="text" class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="article_modified_time">Article Modified Time </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="article_modified_time" id="article_modified_time" type="text"
                                                value="{{ $seoData->structured_data['article']['article_modified_time'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Twitter Metadata -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="twitter_title">Twitter Title </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="twitter_title" id="twitter_title" type="text"
                                                value="{{ $seoData->structured_data['twitter']['twitter_title'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="twitter_description">Twitter Description </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="twitter_description" id="twitter_description" type="text"
                                                value="{{ $seoData->structured_data['twitter']['twitter_description'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="twitter_image">Twitter Image </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="twitter_image" id="twitter_image" type="text"
                                                value="{{ $seoData->structured_data['twitter']['twitter_image'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="twitter_card">Twitter Card </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <input name="twitter_card" id="twitter_card" type="text"
                                                value="{{ $seoData->structured_data['twitter']['twitter_card'] ?? '' }}"
                                                class="form-control" />
                                            <!-- Add error handling if needed -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-success btn-md nextBtn btn-lg ">أضافة</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {


            var datatable = $('#custom_table').DataTable({
                stateSave: true,
                sortable: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [1, 2, 3]
                        }
                    },

                    'colvis'
                ],
                responsive: true
            });


        });
    </script>
@endpush
