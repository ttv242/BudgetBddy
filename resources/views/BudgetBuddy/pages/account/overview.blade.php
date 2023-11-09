@extends('BudgetBuddy.master')
@section('content')
    @php
        $percent = session('percent');
    @endphp
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">


            <!--begin::Content-->
            <div id="kt_app_content" class="app-content ">


                <!--begin::Navbar-->
                @include('BudgetBuddy.pages.account.inc.navbar')
                <!--end::Navbar-->

                <!--begin::details View-->
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Chi tiết hồ sơ {{ $user->username }}</h3>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Action-->
                        <a href="{{ route('settings') }}" class="btn btn-sm btn-primary align-self-center">Chỉnh sửa hồ
                            sơ</a>
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Họ và tên</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{ $user->full_name }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Nghề nghiệp</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{ $user->job_title }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Địa chỉ công ty</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-semibold text-gray-800 fs-6">{{ $user->workplace }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">
                                Số điện thoại

                                <span class="ms-1" data-bs-toggle="tooltip" title="Số điện thoại đang hoạt động">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bold fs-6 text-gray-800 me-2">{{ $user->phone_number }}</span>
                                <span class="badge badge-success">Đã xác minh</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Facebook</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <a href="{{ $user->facebook }}" target="_blank"
                                    class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $user->facebook }}</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Email</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <a href="#"
                                    class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ $user->email }}</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">
                                Quê quán

                                <span class="ms-1" data-bs-toggle="tooltip" title="Nơi sinh và gia đình">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{ $user->address }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Ngày sinh</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{ $user->date_of_birth }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Tên ngân hàng</label>
                            <!--begin::Label-->

                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-semibold fs-6 text-gray-800">{{ $user->account_type }}</span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Số tài khoản</label>
                            <!--begin::Label-->

                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-semibold fs-6 text-gray-800">{{ $user->account_number }}</span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->

                        @if ($percent != 100)
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 ">
                                    <!--begin::Content-->
                                    <div class=" fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Chúng tôi cần sự chú ý của bạn!</h4>

                                        <div class="fs-6 text-gray-700 ">Vui lòng cập nhật hoàn thiện hồ sơ chi tiết </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        @endif
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::details View-->
                <!--begin::Row-->
                {{-- <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-8 mb-xl-10">
                        <!--begin::Chart widget 5-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header flex-nowrap pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Top Selling
                                        Categories</span>

                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">8k social
                                        visitors</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i>
                                    </button>


                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Ticket
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Customer
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Admin Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Staff Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Member Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Contact
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                    Generate Reports
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->

                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pt-5 ps-6">
                                <div id="kt_charts_widget_5" class="min-h-auto"></div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 5-->


                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">

                        <!--begin::Engage widget 1-->
                        <div class="card h-md-100" dir="ltr">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column flex-center">
                                <!--begin::Heading-->
                                <div class="mb-2">
                                    <!--begin::Title-->
                                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                        Have you tried <br /> new
                                        <span class="fw-bolder"> Mobile Application ?</span>
                                    </h1>
                                    <!--end::Title-->

                                    <!--begin::Illustration-->
                                    <div class="py-10 text-center">
                                        <img src="{{ asset('BudgetBuddy/media/svg/illustrations/easy/1.svg') }}"
                                            class="theme-light-show w-200px" alt="" />
                                        <img src="{{ asset('BudgetBuddy/media/svg/illustrations/easy/1-dark.svg') }}"
                                            class="theme-dark-show w-200px" alt="" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Links-->
                                <div class="text-center mb-1">
                                    <!--begin::Link-->
                                    <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app"
                                        data-bs-toggle="modal">
                                        Try now </a>
                                    <!--end::Link-->

                                    <!--begin::Link-->
                                    <a class="btn btn-sm btn-light"
                                        href="/axel-html-pro/apps/invoices/view/invoice-1.html">
                                        Learn more </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 1-->

                    </div>
                    <!--end::Col-->
                </div> --}}
                <!--end::Row-->

                <!--begin::Row-->
                {{-- <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">

                        <!--begin::List widget 5-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Product Delivery</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">1M Products
                                        Shipped so far</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                        class="btn btn-sm btn-light">Order Details</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Scroll-->
                                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('BudgetBuddy/media/stock/ecommerce/210.png') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <!--end::Icon-->

                                                <!--begin::Title-->
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                    1802</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">

                                                    <i class="ki-duotone ki-dots-square fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                            Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">To:
                                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">
                                                    Jason Bourne </a>
                                            </span>
                                            <!--end::Name-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light-success">Delivered</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('BudgetBuddy/media/stock/ecommerce/209.png') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <!--end::Icon-->

                                                <!--begin::Title-->
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">

                                                    <i class="ki-duotone ki-dots-square fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                            Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">To:
                                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">
                                                    Marie Durant </a>
                                            </span>
                                            <!--end::Name-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light-primary">Shipping</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('BudgetBuddy/media/stock/ecommerce/214.png') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <!--end::Icon-->

                                                <!--begin::Title-->
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">Yellow
                                                    Stone</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">

                                                    <i class="ki-duotone ki-dots-square fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                            Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">To:
                                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">
                                                    Dan Wilson </a>
                                            </span>
                                            <!--end::Name-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger">Confirmed</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('BudgetBuddy/media/stock/ecommerce/211.png') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <!--end::Icon-->

                                                <!--begin::Title-->
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">Elephant
                                                    1802</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">

                                                    <i class="ki-duotone ki-dots-square fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                            Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">To:
                                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">
                                                    Lebron Wayde </a>
                                            </span>
                                            <!--end::Name-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light-success">Delivered</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('BudgetBuddy/media/stock/ecommerce/215.png') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <!--end::Icon-->

                                                <!--begin::Title-->
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">

                                                    <i class="ki-duotone ki-dots-square fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                            Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">To:
                                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">
                                                    Ana Simmons </a>
                                            </span>
                                            <!--end::Name-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light-primary">Shipping</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 ">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('BudgetBuddy/media/stock/ecommerce/192.png') }}"
                                                    class="w-50px ms-n1 me-1" alt="" />
                                                <!--end::Icon-->

                                                <!--begin::Title-->
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">Yellow
                                                    Stone</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">

                                                    <i class="ki-duotone ki-dots-square fs-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                            Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">To:
                                                <a href="/axel-html-pro/apps/ecommerce/sales/details.html"
                                                    class="text-gray-800 text-hover-primary fw-bold">
                                                    Kevin Leonard </a>
                                            </span>
                                            <!--end::Name-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger">Confirmed</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 5-->


                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-8">

                        <!--begin::Table Widget 5-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Stock Report</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 2,356
                                        Items in the Stock</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Destination-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">Cateogry</div>
                                            <!--end::Label-->

                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected>Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category B</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Destination-->

                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">Status</div>
                                            <!--end::Label-->

                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                                data-kt-table-widget-5="filter_status">
                                                <option></option>
                                                <option value="Show All" selected>Show All</option>
                                                <option value="In Stock">In Stock</option>
                                                <option value="Out of Stock">Out of Stock</option>
                                                <option value="Low Stock">Low Stock</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Status-->

                                        <!--begin::Search-->
                                        <a href="/axel-html-pro/apps/ecommerce/catalog/products.html"
                                            class="btn btn-light btn-sm">View Stock</a>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-150px">Item</th>
                                            <th class="text-end pe-3 min-w-100px">Product ID</th>
                                            <th class="text-end pe-3 min-w-150px">Date Added</th>
                                            <th class="text-end pe-3 min-w-100px">Price</th>
                                            <th class="text-end pe-3 min-w-100px">Status</th>
                                            <th class="text-end pe-0 min-w-75px">Qty</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">Macbook Air
                                                    M1</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #XGY-356 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                02 Apr, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $1,230 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                    Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="58">
                                                <span class="text-dark fw-bold">58 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">Surface
                                                    Laptop 4</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #YHD-047 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                01 Apr, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $1,060 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out
                                                    of Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="0">
                                                <span class="text-dark fw-bold">0 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">Logitech MX
                                                    250</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #SRR-678 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                24 Mar, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $64 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                    Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="290">
                                                <span class="text-dark fw-bold">290 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">AudioEngine
                                                    HD3</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #PXF-578 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                24 Mar, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $1,060 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Out
                                                    of Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="46">
                                                <span class="text-dark fw-bold">46 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">HP Hyper
                                                    LTR</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #PXF-778 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                16 Jan, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $4500 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                    Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="78">
                                                <span class="text-dark fw-bold">78 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">Dell 32
                                                    UltraSharp</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #XGY-356 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                22 Dec, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $1,060 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Low
                                                    Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="8">
                                                <span class="text-dark fw-bold">8 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr>
                                            <!--begin::Item-->
                                            <td>
                                                <a href="/axel-html-pro/apps/ecommerce/catalog/edit-product.html"
                                                    class="text-dark text-hover-primary">Google Pixel
                                                    6 Pro</a>
                                            </td>
                                            <!--end::Item-->

                                            <!--begin::Product ID-->
                                            <td class="text-end">
                                                #XVR-425 </td>
                                            <!--end::Product ID-->

                                            <!--begin::Date added-->
                                            <td class="text-end">
                                                27 Dec, 2023 </td>
                                            <!--end::Date added-->

                                            <!--begin::Price-->
                                            <td class="text-end">
                                                $1,060 </td>
                                            <!--end::Price-->

                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                    Stock</span>
                                            </td>
                                            <!--end::Status-->

                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="124">
                                                <span class="text-dark fw-bold">124 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Table Widget 5-->
                    </div>
                    <!--end::Col-->
                </div> --}}
                <!--end::Row-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Content wrapper-->

    </div>
    <!--end:::Main-->
@endsection
