@extends('backend.layouts.master')

@section('title')
    الخدمات / المنتجات
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الخدمات / المنتجات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active"> الخدمات / المنتجات</li>
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
                    <table id="custom_table" class="display">
                        <thead>
                            <tr>

                                <th>Id</th>
                                <th>الصورة الرئيسية</th>
                                <td>ال gallery</td>
                                <th>عنوان</th>
                                <th>icon</th>
                                <th>الصفحة الرئيسية</th>
                                <th>أضافة صورة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicesProducts as $serviceProduct)
                                <tr>

                                    <td>{{ $serviceProduct->id }}</td>
                                    <td>
                                        <img src="{{ $serviceProduct->image_url }}" height="50" width="50"
                                            alt="">
                                    </td>
                                    <td>
                                        @php
                                            $images = App\Models\Image::where('service_product_id', $serviceProduct->id)->pluck('image');
                                        @endphp

                                        @foreach ($images as $image)
                                            <img src="{{ asset('storage/thumbnail/images/' . $image) }}" height="50"
                                                width="50" alt="">
                                        @endforeach
                                    </td>

                                    <td>{{ $serviceProduct->title }}</td>

                                    <td>
                                        <i {!! $serviceProduct->icon ? $serviceProduct->icon : '' !!}></i>
                                    </td>

                                    <td>
                                        @if ($serviceProduct->main_page == 1)
                                            <span class="text-success">عرض</span>
                                        @else
                                            <span class="text-danger">إخفاء</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#addImage{{ $serviceProduct->id }}">
                                            أضافة <i class="fa fa-plus"></i>
                                        </a>

                                    </td>

                                    @include('backend.pages.servicesProducts.add_image_modal')

                                    <td>
                                        @php
                                            $seo = App\Models\SeoData::where('entity_id', $serviceProduct->id)
                                                ->where('entity_type', 'serviceProduct')
                                                ->first();
                                        @endphp
                                        @if ($seo)
                                            <a href="{{ Route('admin.seo.edit', [$serviceProduct->id, 'serviceProduct']) }}"
                                                class="btn btn-success btn-sm">
                                                Edit Seo
                                            </a>
                                        @else
                                            <a href="{{ Route('admin.seo.create', [$serviceProduct->id, 'serviceProduct']) }}"
                                                class="btn btn-primary btn-sm">
                                                Add Seo
                                            </a>
                                        @endif
                                        <a href="{{ route('admin.servicesProducts.edit', $serviceProduct->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <form action="{{ Route('admin.servicesProducts.destroy', $serviceProduct->id) }}"
                                            method="post" style="display:inline">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>


                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
        $(document).ready(function() {


            var datatable = $('#custom_table').DataTable({
                stateSave: true,
                sortable: true,
                oLanguage: {
                    sSearch: 'البحث',
                    sInfo: "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
                    sZeroRecords: 'لا يوجد سجل متتطابق',
                    sEmptyTable: 'لا يوجد بيانات في الجدول',
                    oPaginate: {
                        sFirst: "First",
                        sLast: "الأخير",
                        sNext: "التالى",
                        sPrevious: "السابق"
                    },
                },
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
