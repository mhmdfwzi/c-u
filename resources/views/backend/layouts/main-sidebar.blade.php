<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">

                    {{-- Dashboard --}}
                    <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="ti-menu-alt"></i><span
                                class="right-nav-text">لوحة التحكم
                            </span> </a>
                    </li>

                    <!-- Users Management -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">أدارة المستخدمين </li>

                    <!-- Roles-->

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#roles">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Roles</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="roles" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.roles.create') }}">Add Role </a> </li>
                            <li> <a href="{{ route('admin.roles.index') }}">All Roles </a> </li>

                        </ul>
                    </li>

                    <!-- Users-->
                    @can('users-show')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#users">
                                <div class="pull-left"><i class="fa fa-users"></i><span
                                        class="right-nav-text">المستخدمين</span>
                                </div>
                                <div class="pull-right"><i class="ti-plus"></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="users" class="collapse" data-parent="#sidebarnav">
                                <li> <a href="{{ route('admin.users.create') }}">أضافة مستخدم</a> </li>
                                <li> <a href="{{ route('admin.users.index') }}">كل المستخدمين</a> </li>

                            </ul>
                        </li>
                    @endcan

                    {{-- teamwork --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#teamwork">
                            <div class="pull-left"><i class="fa fa-user"></i><span class="right-nav-text">فريق
                                    العمل</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="teamwork" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.teamwork.create') }}">أضافة فريق العمل</a> </li>
                            <li> <a href="{{ route('admin.teamwork.index') }}">كل فريق العمل</a> </li>

                        </ul>
                    </li>

                    {{-- clients --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#clients">
                            <div class="pull-left"><i class="fa fa-users"></i><span
                                    class="right-nav-text">العملاء</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="clients" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.clients.create') }}">أضافة عميل</a> </li>
                            <li> <a href="{{ route('admin.clients.index') }}">كل العملاء</a> </li>

                        </ul>
                    </li>

                    <!-- Pages -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages">
                            <div class="pull-left"><i class="fa fa-file"></i><span class="right-nav-text">الصفحات</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="pages" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.pages.create') }}">أضافة صفحة</a> </li>
                            <li> <a href="{{ route('admin.pages.index') }}">كل الصفحات</a> </li>

                        </ul>
                    </li>

                    {{-- gallery --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#gallery">
                            <div class="pull-left"><i class="fa fa-image"></i><span
                                    class="right-nav-text">Gallery</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="gallery" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.gallery.create') }}"> Add Gallery</a> </li>
                            <li> <a href="{{ route('admin.gallery.index') }}"> All Gallery </a> </li>

                        </ul>
                    </li>

                    {{-- images --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#images">
                            <div class="pull-left"><i class="fa fa-image"></i><span class="right-nav-text">الصور</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="images" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.images.create') }}"> أضافة صورة</a> </li>
                            <li> <a href="{{ route('admin.images.index') }}"> كل الصور </a> </li>

                        </ul>
                    </li>


                    <!-- Portfolio -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#portfolio">
                            <div class="pull-left"><i class="fa fa-image"></i><span
                                    class="right-nav-text">Portfolio</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="portfolio" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.portfolio.create') }}">Add Portfolio</a> </li>
                            <li> <a href="{{ route('admin.portfolio.index') }}">All Portfolio</a> </li>

                        </ul>
                    </li>

                    <!-- Services / Products -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#services">
                            <div class="pull-left"><i class="fa fa-product-hunt"></i><span
                                    class="right-nav-text">الخدمات /
                                    المنتجات</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="services" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.servicesProducts.create') }}">أضافة خدمة / منتج</a> </li>
                            <li> <a href="{{ route('admin.servicesProducts.index') }}">كل الخدمات / المنتجات</a> </li>

                        </ul>
                    </li>


                    <!-- Blogs / News -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#blogs">
                            <div class="pull-left"><i class="fa fa-product-hunt"></i><span class="right-nav-text">
                                    المدونات / الأخبار </span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="blogs" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.blogsNews.create') }}">أضافة مدونة / خبر</a> </li>
                            <li> <a href="{{ route('admin.blogsNews.index') }}">كل المدونات / الأخبار</a> </li>

                        </ul>
                    </li>

                    <!-- Seo Data-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#seoData">
                            <div class="pull-left"><i class="fa fa-info"></i><span class="right-nav-text">Seo
                                    Data</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="seoData" class="collapse" data-parent="#sidebarnav">
                            {{-- <li> <a href="{{ route('admin.seo.create') }}">Add Seo Data</a> </li> --}}
                            <li> <a href="{{ route('admin.seo.index') }}">All Seo Data</a> </li>

                        </ul>
                    </li>


                    {{-- <!-- Meta Data-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#metaData">
                            <div class="pull-left"><i class="fa fa-info"></i><span class="right-nav-text">Meta
                                    Data</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="metaData" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.metaData.create') }}">Add Meta Data</a> </li>
                            <li> <a href="{{ route('admin.metaData.index') }}">All Meta Data</a> </li>

                        </ul>
                    </li> --}}

                    <!-- Website Info -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#websiteInfo">
                            <div class="pull-left"><i class="fa fa-info"></i><span class="right-nav-text">معلومات
                                    الموقع</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="websiteInfo" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.websiteInfo.create') }}">أضافة معلومة</a> </li>
                            <li> <a href="{{ route('admin.websiteInfo.index') }}">كل معلومات الموقع</a> </li>

                        </ul>
                    </li>

                    <!-- Website Info -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#orders">
                            <div class="pull-left"><i class="fa fa-cart-plus"></i><span class="right-nav-text">
                                    الطلبات</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="orders" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.orders.index') }}">كل الطلبات</a> </li>

                        </ul>
                    </li>





                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
