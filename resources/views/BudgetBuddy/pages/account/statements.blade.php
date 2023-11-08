@extends('BudgetBuddy.master')
@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">


            <!--begin::Content-->
            <div id="kt_app_content" class="app-content ">


                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div
                                    class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="/axel-html-pro/assets/media/avatars/300-3.jpg"
                                        alt="image" />
                                    <div
                                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                                    </div>
                                </div>
                            </div>
                            <!--end::Pic-->

                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div
                                    class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#"
                                                class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Johnson</a>
                                            <a href="#"><i
                                                    class="ki-duotone ki-verify fs-1 text-primary"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i></a>

                                            <a href="#"
                                                class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_upgrade_plan"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade to
                                                Pro</a>
                                        </div>
                                        <!--end::Name-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-profile-circle fs-4 me-1"><span
                                                        class="path1"></span><span
                                                        class="path2"></span><span
                                                        class="path3"></span></i> React Developer
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i> SF, Bay Area
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <i class="ki-duotone ki-sms fs-4 me-1"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i> johnson@kt.com
                                            </a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Actions-->
                                    <div class="d-flex my-4">
                                        <a href="#" class="btn btn-sm btn-light me-2"
                                            id="kt_user_follow_button">
                                            <i class="ki-duotone ki-check fs-2 d-none"></i>
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">
                                                Follow</span>
                                            <!--end::Indicator label-->

                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                            <!--end::Indicator progress--> </a>

                                        <a href="#" class="btn btn-sm btn-primary me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>

                                        <!--begin::Menu-->
                                        <div class="me-0">
                                            <button
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">
                                                <i class="bi bi-three-dots fs-3"></i>
                                            </button>

                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div
                                                        class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Create Invoice
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">
                                                        Create Payment

                                                        <span class="ms-2" data-bs-toggle="tooltip"
                                                            title="Specify a target name for future usage and reference">
                                                            <i class="ki-duotone ki-information fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i> </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Generate Bill
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>

                                                    <!--begin::Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Plans
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Billing
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Statements
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input
                                                                        class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1"
                                                                        checked="checked"
                                                                        name="notifications" />
                                                                    <!--end::Input-->

                                                                    <!--end::Label-->
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">
                                                                        Recuring
                                                                    </span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">
                                                        Settings
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i
                                                        class="ki-duotone ki-arrow-up fs-2 text-success me-2"><span
                                                            class="path1"></span><span
                                                            class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="4500"
                                                        data-kt-countup-prefix="$">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Earnings
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i
                                                        class="ki-duotone ki-arrow-down fs-2 text-danger me-2"><span
                                                            class="path1"></span><span
                                                            class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="75">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Projects
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <i
                                                        class="ki-duotone ki-arrow-up fs-2 text-success me-2"><span
                                                            class="path1"></span><span
                                                            class="path2"></span></i>
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                        data-kt-countup-value="60"
                                                        data-kt-countup-prefix="%">0</div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Success Rate
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Progress-->
                                    <div
                                        class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-semibold fs-6 text-gray-400">Profile
                                                Compleation</span>
                                            <span class="fw-bold fs-6">50%</span>
                                        </div>

                                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                                            <div class="bg-success rounded h-5px" role="progressbar"
                                                style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->

                        <!--begin::Navs-->
                        <ul
                            class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{ route('overview') }}">
                                    Overview </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{ route('settings') }}">
                                    Settings </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="/axel-html-pro/account/security.html">
                                    Security </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="/axel-html-pro/account/activity.html">
                                    Activity </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{ route('billing') }}">
                                    Billing </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                    href="{{ route('statements') }}">
                                    Statements </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="/axel-html-pro/account/referrals.html">
                                    Referrals </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="/axel-html-pro/account/api-keys.html">
                                    API Keys </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="/axel-html-pro/account/logs.html">
                                    Logs </a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Row-->
                <div class="row g-xxl-9">
                    <!--begin::Col-->
                    <div class="col-xxl-8">
                        <!--begin::Earnings-->
                        <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3>Earnings</h3>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <span class="fs-5 fw-semibold text-gray-600 pb-5 d-block">Last 30 day
                                    earnings calculated. Apart from arranging the order of
                                    topics.</span>

                                <!--begin::Left Section-->
                                <div class="d-flex flex-wrap justify-content-between pb-6">
                                    <!--begin::Row-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Col-->
                                        <div
                                            class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                            <span class="fs-2x fw-bold text-gray-800 lh-1">
                                                <span data-kt-countup="true"
                                                    data-kt-countup-value="6,840"
                                                    data-kt-countup-prefix="$">0</span>
                                            </span>
                                            <span
                                                class="fs-6 fw-semibold text-gray-400 d-block lh-1 pt-2">Net
                                                Earnings</span>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div
                                            class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                            <span class="fs-2x fw-bold text-gray-800 lh-1">
                                                <span class="" data-kt-countup="true"
                                                    data-kt-countup-value="80">0</span>%
                                            </span>
                                            <span
                                                class="fs-6 fw-semibold text-gray-400 d-block lh-1 pt-2">Change</span>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div
                                            class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                            <span class="fs-2x fw-bold text-gray-800 lh-1">
                                                <span data-kt-countup="true"
                                                    data-kt-countup-value="1,240"
                                                    data-kt-countup-prefix="$">0</span>
                                            </span>
                                            <span
                                                class="fs-6 fw-semibold text-gray-400 d-block lh-1 pt-2">Fees</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                    <a href="#"
                                        class="btn btn-primary  px-6 flex-shrink-0 align-self-center">Withdraw
                                        Earnings</a>
                                </div>
                                <!--end::Left Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Earnings-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xxl-4">
                        <!--begin::Invoices-->
                        <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="text-gray-800">Invoices</h3>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body">
                                <span class="fs-5 fw-semibold text-gray-600 pb-6 d-block">Download apart
                                    from order of the good awesome invoice topics</span>

                                <!--begin::Left Section-->
                                <div class="d-flex align-self-center">
                                    <div class="flex-grow-1 me-3">
                                        <!--begin::Select-->
                                        <select class="form-select form-select-solid"
                                            data-control="select2" data-placeholder="Seller Annual Fee"
                                            data-hide-search="true">
                                            <option value=""></option>
                                            <option value="1">Individual Seller Account</option>
                                            <option value="2">Variable Closing Fee</option>
                                            <option value="3">Minimum Referral Fee</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>

                                    <!--begin::Action-->
                                    <button type="button"
                                        class="btn btn-primary btn-icon flex-shrink-0">
                                        <i class="ki-duotone ki-arrow-down fs-1"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Left Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Invoices-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->


                <!--begin::Statements-->
                <div class="card  ">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="m-0 text-gray-800">Statement</h3>
                        </div>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_year_tab"
                                        class="nav-link text-active-gray-800 active"
                                        data-bs-toggle="tab" role="tab" href="#kt_referrals_1">
                                        This Year
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2019_tab"
                                        class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab"
                                        role="tab" href="#kt_referrals_2">
                                        2022 </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2018_tab"
                                        class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab"
                                        role="tab" href="#kt_referrals_3">
                                        2021 </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a id="kt_referrals_2017_tab"
                                        class="nav-link text-active-gray-800 ms-8" data-bs-toggle="tab"
                                        role="tab" href="#kt_referrals_4">
                                        2020 </a>
                                </li>
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Tab Content-->
                    <div id="kt_referred_users_tab_content" class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active"
                            role="tabpanel">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                    class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                        <tr>
                                            <th class="min-w-175px ps-9">Date</th>
                                            <th class="min-w-150px px-0">Order ID</th>
                                            <th class="min-w-350px">Details</th>
                                            <th class="min-w-125px">Amount</th>
                                            <th class="min-w-125px text-center">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">102445788</td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 24, 2020</td>
                                            <td class="ps-0">423445721</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 08, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Sep 15, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">May 30, 2020</td>
                                            <td class="ps-0">523445943</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Apr 22, 2020</td>
                                            <td class="ps-0">231445943</td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Feb 09, 2020</td>
                                            <td class="ps-0">426445943</td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">984445943</td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Jan 04, 2020</td>
                                            <td class="ps-0">324442313</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_referrals_2" class="card-body p-0 tab-pane fade " role="tabpanel">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                    class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                        <tr>
                                            <th class="min-w-175px ps-9">Date</th>
                                            <th class="min-w-150px px-0">Order ID</th>
                                            <th class="min-w-350px">Details</th>
                                            <th class="min-w-125px">Amount</th>
                                            <th class="min-w-125px text-center">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td class="ps-9">May 30, 2020</td>
                                            <td class="ps-0">523445943</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Apr 22, 2020</td>
                                            <td class="ps-0">231445943</td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Feb 09, 2020</td>
                                            <td class="ps-0">426445943</td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">984445943</td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Jan 04, 2020</td>
                                            <td class="ps-0">324442313</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">102445788</td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 24, 2020</td>
                                            <td class="ps-0">423445721</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 08, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Sep 15, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_referrals_3" class="card-body p-0 tab-pane fade " role="tabpanel">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                    class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                        <tr>
                                            <th class="min-w-175px ps-9">Date</th>
                                            <th class="min-w-150px px-0">Order ID</th>
                                            <th class="min-w-350px">Details</th>
                                            <th class="min-w-125px">Amount</th>
                                            <th class="min-w-125px text-center">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td class="ps-9">Feb 09, 2020</td>
                                            <td class="ps-0">426445943</td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">984445943</td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Jan 04, 2020</td>
                                            <td class="ps-0">324442313</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Sep 15, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                            <td class="text-success">$5.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">102445788</td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 24, 2020</td>
                                            <td class="ps-0">423445721</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 08, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">May 30, 2020</td>
                                            <td class="ps-0">523445943</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-1.30</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Apr 22, 2020</td>
                                            <td class="ps-0">231445943</td>
                                            <td>Parcel Shipping / Delivery Service App</td>
                                            <td class="text-success">$204.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_referrals_4" class="card-body p-0 tab-pane fade " role="tabpanel">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                    class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                        <tr>
                                            <th class="min-w-175px ps-9">Date</th>
                                            <th class="min-w-150px px-0">Order ID</th>
                                            <th class="min-w-350px">Details</th>
                                            <th class="min-w-125px">Amount</th>
                                            <th class="min-w-125px text-center">Invoice</th>
                                        </tr>
                                    </thead>
                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">102445788</td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 24, 2020</td>
                                            <td class="ps-0">423445721</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">102445788</td>
                                            <td>Darknight transparency 36 Icons Pack</td>
                                            <td class="text-success">$38.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 24, 2020</td>
                                            <td class="ps-0">423445721</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-2.60</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Feb 09, 2020</td>
                                            <td class="ps-0">426445943</td>
                                            <td>Visual Design Illustration</td>
                                            <td class="text-success">$31.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Nov 01, 2020</td>
                                            <td class="ps-0">984445943</td>
                                            <td>Abstract Vusial Pack</td>
                                            <td class="text-success">$52.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Jan 04, 2020</td>
                                            <td class="ps-0">324442313</td>
                                            <td>Seller Fee</td>
                                            <td class="text-danger">$-0.80</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 08, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-9">Oct 08, 2020</td>
                                            <td class="ps-0">312445984</td>
                                            <td>Cartoon Mobile Emoji Phone Pack</td>
                                            <td class="text-success">$76.00</td>
                                            <td class="text-center"><button
                                                    class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Tab panel-->

                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Statements-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Content wrapper-->

    </div>
    <!--end:::Main-->
@endsection