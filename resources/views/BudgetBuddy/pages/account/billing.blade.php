@extends('BudgetBuddy.master')

@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">


            <!--begin::Content-->
            <div id="kt_app_content" class="app-content ">


                <!--begin::Navbar-->
                @include('BudgetBuddy.pages.account.inc.navbar')
                <!--end::Navbar-->

                <!--begin::Billing Summary-->
                {{-- <div class="card  mb-5 mb-xl-10">
                    <!--begin::Card body-->
                    <div class="card-body">

                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-12 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                                    <div class="fs-6 text-gray-700 ">Your payment was declined. To start
                                        using tools, please <a href="#" class="fw-bold" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_card">Add Payment Method</a>.
                                    </div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->

                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-7">
                                <!--begin::Heading-->
                                <h3 class="mb-2">Active until Dec 09, 2023</h3>
                                <p class="fs-6 text-gray-600 fw-semibold mb-6 mb-lg-15">We will send you
                                    a notification upon Subscription expiration </p>
                                <!--end::Heading-->

                                <!--begin::Info-->
                                <div class="fs-5 mb-2">
                                    <span class="text-gray-800 fw-bold me-1">$24.99</span>
                                    <span class="text-gray-600 fw-semibold">Per Month</span>
                                </div>
                                <!--end::Info-->

                                <!--begin::Notice-->
                                <div class="fs-6 text-gray-600 fw-semibold">
                                    Extended Pro Package. Up to 100 Agents & 25 Projects
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-5">
                                <!--begin::Heading-->
                                <div class="d-flex text-muted fw-bold fs-5 mb-3">
                                    <span class="flex-grow-1 text-gray-800">Users</span>
                                    <span class="text-gray-800">86 of 100 Used</span>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Progress-->
                                <div class="progress h-8px bg-light-primary mb-2">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 86%"
                                        aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->

                                <!--begin::Description-->
                                <div class="fs-6 text-gray-600 fw-semibold mb-10">14 Users remaining
                                    until your plan requires update</div>
                                <!--end::Description-->

                                <!--begin::Action-->
                                <div class="d-flex justify-content-end pb-0 px-0">
                                    <a href="#" class="btn btn-light btn-active-light-primary me-2"
                                        id="kt_account_billing_cancel_subscription_btn">Cancel
                                        Subscription</a>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</button>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                </div> --}}
                <!--end::Billing Summary-->

                <!--begin::Payment methods-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header card-header-stretch pb-0">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0">Danh Mục Thanh toán</h3>
                        </div>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bold me-5 active"
                                        data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard">
                                        Cá nhân
                                    </a>
                                </li>
                                <!--end::Tab item-->

                                <!--begin::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab"
                                        role="tab" href="#kt_billing_paypal">
                                        Chung
                                    </a>
                                </li>
                                <!--end::Tab item-->
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Tab content-->
                    <div id="kt_billing_payment_tab_content" class="card-body tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
                            <!--begin::Title-->
                            {{-- <h3 class=" mb-5">Danh mục</h3> --}}
                            <!--end::Title-->

                            <!--begin::Row-->
                            <div class="row gx-9 gy-6">
                                <!--begin::Col-->
                                <div class="col-xl-6" data-kt-billing-element="card">
                                    <!--begin::Card-->
                                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column py-2">
                                            <!--begin::Owner-->
                                            <div class="d-flex align-items-center fs-4 fw-bold mb-5">
                                                Thức uống
                                            </div>
                                            <!--end::Owner-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('Budgetbuddy/media/svg/card-logos/american-express.svg') }}"
                                                    alt="" class="me-4" />
                                                <!--end::Icon-->

                                                <!--begin::Details-->
                                                <div>
                                                    <div class="fs-4 fw-bold">Số lượng: 12</div>
                                                    <div class="fs-6 fw-semibold text-gray-400">Ngày khởi tạo danh mục 24/09
                                                    </div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center py-2">
                                            <button class="btn btn-sm btn-light btn-active-light-primary me-3"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_detail_cat">Chi
                                                tiết</button>
                                            <button class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-billing-action="card-delete">

                                                <!--begin::Indicator label-->
                                                <span class="indicator-label">
                                                    Xóa</span>
                                                <!--end::Indicator label-->

                                                <!--begin::Indicator progress-->
                                                <span class="indicator-progress">
                                                    Please wait... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                                <!--end::Indicator progress-->
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-xl-6" data-kt-billing-element="card">
                                    <!--begin::Card-->
                                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column py-2">
                                            <!--begin::Owner-->
                                            <div class="d-flex align-items-center fs-4 fw-bold mb-5">
                                                Kẹo
                                            </div>
                                            <!--end::Owner-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <img src="{{ asset('Budgetbuddy/media/svg/card-logos/mastercard.svg') }}"
                                                    alt="" class="me-4" />
                                                <!--end::Icon-->

                                                <!--begin::Details-->
                                                <div>
                                                    <div class="fs-4 fw-bold">Số lượng: 12</div>
                                                    <div class="fs-6 fw-semibold text-gray-400">Ngày khởi tạo danh mục 24/10
                                                    </div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Info-->

                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center py-2">
                                            <button class="btn btn-sm btn-light btn-active-light-primary me-3"
                                                data-kt-billing-action="card-delete">

                                                <!--begin::Indicator label-->
                                                <span class="indicator-label">
                                                    Xóa</span>
                                                <!--end::Indicator label-->

                                                <!--begin::Indicator progress-->
                                                <span class="indicator-progress">
                                                    Please wait... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                                <!--end::Indicator progress-->
                                            </button>
                                            <button class="btn btn-sm btn-light btn-active-light-primary"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Sửa</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-xl-6">

                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Tạo danh mục!</h4>

                                                <div class="fs-6 text-gray-700 pe-7">Phân chia sản phẩm theo từng
                                                    danh mục<br /> Hỗ trợ quản lý thanh toán và quá trình tạo đơn hàng nhanh
                                                    chóng
                                                </div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                                Thêm </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Modal - New Card-->
                            <div class="modal fade" id="kt_modal_detail_cat" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-950px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2>Chi tiết (Tên Danh Mục)</h2>
                                            <!--end::Modal title-->

                                            <!--begin::Close-->
                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->

                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-1 mx-xl-15 my-7 p-0">
                                            <!--begin::Form-->
                                            <table id="kt_datatable_fixed_columns"
                                                class="table table-striped table-row-bordered gy-5 gs-7">
                                                <thead>
                                                    <tr class="fw-semibold fs-6 text-gray-800">
                                                        <th class="min-w-20px">STT</th>
                                                        <th class="min-w-100px">Sản phẩm</th>
                                                        <th class="min-w-100px">Số lượng</th>
                                                        <th class="min-w-100px">Tổng cộng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>Edinburgh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>Edinburgh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>Edinburgh</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div
                                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                                    <div class="dataTables_length"
                                                        id="kt_datatable_zero_configuration_length"><label><select
                                                                name="kt_datatable_zero_configuration_length"
                                                                aria-controls="kt_datatable_zero_configuration"
                                                                class="form-select form-select-sm form-select-solid">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select></label></div>
                                                    <div class="dataTables_info" id="kt_datatable_zero_configuration_info"
                                                        role="status" aria-live="polite">Showing 1 to 10 of 57 records
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="kt_datatable_zero_configuration_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="kt_datatable_zero_configuration_previous"><a
                                                                    href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="0" tabindex="0" class="page-link"><i
                                                                        class="previous"></i></a></li>
                                                            <li class="paginate_button page-item active"><a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="1" tabindex="0"
                                                                    class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="2" tabindex="0"
                                                                    class="page-link">2</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="3" tabindex="0"
                                                                    class="page-link">3</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="4" tabindex="0"
                                                                    class="page-link">4</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="5" tabindex="0"
                                                                    class="page-link">5</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="6" tabindex="0"
                                                                    class="page-link">6</a></li>
                                                            <li class="paginate_button page-item next"
                                                                id="kt_datatable_zero_configuration_next">
                                                                <a href="#"
                                                                    aria-controls="kt_datatable_zero_configuration"
                                                                    data-dt-idx="7" tabindex="0" class="page-link"><i
                                                                        class="next"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $("#kt_datatable_fixed_columns").DataTable({
                                                    scrollY: "300px",
                                                    scrollX: true,
                                                    scrollCollapse: true,
                                                    fixedColumns: {
                                                        left: 2
                                                    }
                                                });
                                            </script>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - New Card-->

                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel"
                            aria-labelledby="kt_billing_paypal_tab">
                            <!--begin::Title-->
                            <h3 class="mb-5">My Paypal</h3>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-gray-600 fs-6 fw-semibold mb-5">To use PayPal as your
                                payment method, you will need to make pre-payments each month before
                                your bill is due.</div>
                            <!--end::Description-->

                            <!--begin::Form-->
                            <form class="form">
                                <!--begin::Input group-->
                                <div class="mb-7 mw-350px">
                                    <select name="timezone" data-control="select2" data-placeholder="Select an option"
                                        data-hide-search="true"
                                        class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700">
                                        <option>Select an option</option>
                                        <option value="25">US $25.00</option>
                                        <option value="50">US $50.00</option>
                                        <option value="100">US $100.00</option>
                                        <option value="125">US $125.00</option>
                                        <option value="150">US $150.00</option>
                                    </select>
                                </div>
                                <!--end::Input group-->

                                <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Payment methods-->
                <!--begin::Billing Address-->
                <div class="card  mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3>Billing Address</h3>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Addresses-->
                        <div class="row gx-9 gy-6">
                            <!--begin::Col-->
                            <div class="col-xl-6" data-kt-billing-element="address">
                                <!--begin::Address-->
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column py-2">
                                        <div class="d-flex align-items-center fs-5 fw-bold mb-5">
                                            Address 1
                                            <span class="badge badge-light-success fs-7 ms-2">Primary</span>
                                        </div>

                                        <div class="fs-6 fw-semibold text-gray-600">
                                            Ap #285-7193 Ullamcorper Avenue<br />
                                            Amesbury HI 93373<br />US
                                        </div>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center py-2">
                                        <button class="btn btn-sm btn-light btn-active-light-primary me-3"
                                            data-kt-billing-action="address-delete">

                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">
                                                Xóa</span>
                                            <!--end::Indicator label-->

                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <button class="btn btn-sm btn-light btn-active-light-primary"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Sửa</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Address-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-6" data-kt-billing-element="address">
                                <!--begin::Address-->
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column py-2">
                                        <div class="d-flex align-items-center fs-5 fw-bold mb-3">
                                            Address 2
                                        </div>

                                        <div class="fs-6 fw-semibold text-gray-600">
                                            Ap #285-7193 Ullamcorper Avenue<br />
                                            Amesbury HI 93373<br />US
                                        </div>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center py-2">
                                        <button class="btn btn-sm btn-light btn-active-light-primary me-3"
                                            data-kt-billing-action="address-delete">

                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">
                                                Xóa</span>
                                            <!--end::Indicator label-->

                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <button class="btn btn-sm btn-light btn-active-light-primary"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Sửa</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Address-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-6" data-kt-billing-element="address">
                                <!--begin::Address-->
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column py-2">
                                        <div class="d-flex align-items-center fs-5 fw-bold mb-3">
                                            Address 3
                                        </div>

                                        <div class="fs-6 fw-semibold text-gray-600">
                                            Ap #285-7193 Ullamcorper Avenue<br />
                                            Amesbury HI 93373<br />US
                                        </div>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center py-2">
                                        <button class="btn btn-sm btn-light btn-active-light-primary me-3"
                                            data-kt-billing-action="address-delete">

                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">
                                                Xóa</span>
                                            <!--end::Indicator label-->

                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <button class="btn btn-sm btn-light btn-active-light-primary"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Sửa</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Address-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-6">

                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-primary rounded border-primary border border-dashed flex-stack h-xl-100 mb-10 p-6">

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">This is a very important
                                                note!</h4>

                                            <div class="fs-6 text-gray-700 pe-7">Writing headlines for
                                                blog posts is much science and probably cool audience
                                            </div>
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">
                                            New Address </a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Addresses-->

                        <!--begin::Tax info-->
                        <div class="mt-10">
                            <h3 class="mb-3">Tax Location</h3>

                            <div class="fw-semibold text-gray-600 fs-6">
                                United States - 10% VAT<br />
                                <a class="fw-bold" href="#">More Info</a>
                            </div>
                        </div>
                        <!--end::Tax info-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Billing Address-->
                <!--begin::Billing History-->
                <div class="card ">
                    <!--begin::Card header-->
                    <div class="card-header card-header-stretch border-bottom border-gray-200">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="fw-bold m-0">Lịch sử Thanh toán</h3>
                        </div>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                                <!--begin::Tab nav item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_6months_tab" class="nav-link fs-5 fw-semibold me-3 active"
                                        data-bs-toggle="tab" role="tab" href="#kt_billing_months">
                                        Month
                                    </a>
                                </li>
                                <!--end::Tab nav item-->

                                <!--begin::Tab nav item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_1year_tab" class="nav-link fs-5 fw-semibold me-3"
                                        data-bs-toggle="tab" role="tab" href="#kt_billing_year">
                                        Year
                                    </a>
                                </li>
                                <!--end::Tab nav item-->

                                <!--begin::Tab nav item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_alltime_tab" class="nav-link fs-5 fw-semibold" data-bs-toggle="tab"
                                        role="tab" href="#kt_billing_all">
                                        All Time
                                    </a>
                                </li>
                                <!--end::Tab nav item-->
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_billing_months" class="card-body p-0 tab-pane fade show active" role="tabpanel"
                            aria-labelledby="kt_billing_months">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9">
                                    <thead
                                        class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Nov 01, 2020</td>
                                            <td><a href="#">Invoice for Ocrober 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Oct 08, 2020</td>
                                            <td><a href="#">Invoice for September 2023</a></td>
                                            <td>$98.03</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 24, 2020</td>
                                            <td>Paypal</td>
                                            <td>$35.07</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 01, 2020</td>
                                            <td><a href="#">Invoice for July 2023</a></td>
                                            <td>$142.80</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jul 01, 2020</td>
                                            <td><a href="#">Invoice for June 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 17, 2020</td>
                                            <td>Paypal</td>
                                            <td>$523.09</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 01, 2020</td>
                                            <td><a href="#">Invoice for May 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_billing_year" class="card-body p-0 tab-pane fade " role="tabpanel"
                            aria-labelledby="kt_billing_year">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9">
                                    <thead
                                        class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Dec 01, 2021</td>
                                            <td><a href="#">Billing for Ocrober 2023</a></td>
                                            <td>$250.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Oct 08, 2021</td>
                                            <td><a href="#">Statements for September 2023</a></td>
                                            <td>$98.03</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 24, 2021</td>
                                            <td>Paypal</td>
                                            <td>$35.07</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 01, 2021</td>
                                            <td><a href="#">Invoice for July 2023</a></td>
                                            <td>$142.80</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jul 01, 2021</td>
                                            <td><a href="#">Statements for June 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 17, 2021</td>
                                            <td>Paypal</td>
                                            <td>$23.09</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_billing_all" class="card-body p-0 tab-pane fade " role="tabpanel"
                            aria-labelledby="kt_billing_all">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9">
                                    <thead
                                        class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Nov 01, 2021</td>
                                            <td><a href="#">Billing for Ocrober 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 10, 2021</td>
                                            <td>Paypal</td>
                                            <td>$35.07</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 01, 2021</td>
                                            <td><a href="#">Invoice for July 2023</a></td>
                                            <td>$142.80</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jul 20, 2021</td>
                                            <td><a href="#">Statements for June 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 17, 2021</td>
                                            <td>Paypal</td>
                                            <td>$23.09</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 01, 2021</td>
                                            <td><a href="#">Invoice for May 2023</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                            </td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Billing Address-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Content wrapper-->

    </div>

    <!--begin::Modal - New Card-->
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Thêm danh mục</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_new_card_form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Tên danh mục</span>


                                <span class="ms-1" data-bs-toggle="tooltip" title="Danh mục của sản phẩm">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span> </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="card_name" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        {{-- <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                            <!--end::Label-->

                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                <!--end::Input-->

                                <!--begin::Card logos-->
                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                    <img src="/axel-html-pro/assets/media/svg/card-logos/visa.svg" alt=""
                                        class="h-25px" />
                                    <img src="/axel-html-pro/assets/media/svg/card-logos/mastercard.svg" alt=""
                                        class="h-25px" />
                                    <img src="/axel-html-pro/assets/media/svg/card-logos/american-express.svg"
                                        alt="" class="h-25px" />
                                </div>
                                <!--end::Card logos-->
                            </div>
                            <!--end::Input wrapper-->
                        </div> --}}
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        {{-- <div class="row mb-10">
                            <!--begin::Col-->
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                <!--end::Label-->

                                <!--begin::Row-->
                                <div class="row fv-row">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="card_expiry_month" class="form-select form-select-solid"
                                            data-control="select2" data-hide-search="true" data-placeholder="Month">
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="card_expiry_year" class="form-select form-select-solid"
                                            data-control="select2" data-hide-search="true" data-placeholder="Year">
                                            <option></option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                    <span class="required">CVV</span>


                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span> </label>
                                <!--end::Label-->

                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" minlength="3"
                                        maxlength="4" placeholder="CVV" name="card_cvv" />
                                    <!--end::Input-->

                                    <!--begin::CVV icon-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                        <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::CVV icon-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Col-->
                        </div> --}}
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        {{-- <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="me-5">
                                <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget
                                    planning</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                <span class="form-check-label fw-semibold text-muted">
                                    Save Card
                                </span>
                            </label>
                            <!--end::Switch-->
                        </div> --}}
                        <!--end::Input group-->


                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            {{-- <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">
                                Loại bỏ
                            </button> --}}

                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Thêm
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->
    <!--end:::Main-->
@endsection
