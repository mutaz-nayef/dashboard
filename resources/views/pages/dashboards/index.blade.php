<x-default-layout>

    @section('title')
    MultiPurpose
    @endsection

    @section('breadcrumbs')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard' , 'en')}}" class="text-muted text-hover-primary">Home</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            Dashboards
        </li>
    </ul>
    @endsection

    @section('actions')
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <!--begin::Primary button-->
        <x-buttons.modal-button type="primary" target="kt_modal_new_target">
            Add Target
        </x-buttons.modal-button>
        <!--end::Primary button-->

        <x-buttons.button class="btn-sm" type="secondary" href="/users">Test</x-buttons.button>
    </div>
    @endsection

    <div class="row g-xxl-9">
        <!--begin::Col-->
        <div class="col-xxl-8">
            <!--begin::Security summary-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3 class="m-0 text-gray-900">Users Summary</h3>
                    </div>
                    <!--end::Title-->

                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bold"
                            id="kt_security_summary_tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary active" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_security_summary_tab_pane_hours"
                                    data-kt-initialized="1" aria-selected="true" role="tab">12 Hours</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                    id="kt_security_summary_tab_day" href="#kt_security_summary_tab_pane_day"
                                    data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Day</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                    id="kt_security_summary_tab_week" href="#kt_security_summary_tab_pane_week"
                                    data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Week</a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-7 pb-0 px-0">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div class="tab-pane fade active show" id="kt_security_summary_tab_pane_hours" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-success d-block">User Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-900 counted" data-kt-countup="true"
                                            data-kt-countup-value="36899" data-kt-initialized="1">36,899</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-primary d-block">Admin Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-900 counted" data-kt-countup="true"
                                            data-kt-countup-value="72" data-kt-initialized="1">72</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-danger d-block">Failed Attempts</span>
                                        <span class="fs-2hx fw-bold text-gray-900 counted" data-kt-countup="true"
                                            data-kt-countup-value="291" data-kt-initialized="1">291</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->


                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_day" role="tabpanel"
                            aria-labelledby="kt_security_summary_tab_day">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-success d-block">User Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="30467">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-primary d-block">Admin Sign-in</span>
                                        <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="120">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-4 fw-semibold text-danger d-block">Failed Attempts</span>
                                        <span class="fs-2hx fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="23">0</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->


                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_security_summary_tab_pane_week" role="tabpanel"
                            aria-labelledby="kt_security_summary_tab_week">
                            <!--begin::Row-->
                            <div class="row p-0 mb-5 px-9">
                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-success d-block">User Sign-in</span>

                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="340">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-primary d-block">Admin Sign-in</span>

                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="90">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col">
                                    <div
                                        class="border border-dashed border-gray-300 text-center min-w-125px rounded pt-4 pb-2 my-3">
                                        <span class="fs-lg-4 fs-6 fw-semibold text-danger d-block">Failed
                                            Attempts</span>

                                        <span class="fs-lg-2hx fs-2 fw-bold text-gray-800" data-kt-countup="true"
                                            data-kt-countup-value="230">0</span>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->


                            <!--end::Container-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Security summary-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4">
            <!--begin::Security recent alerts-->
            <div class="card card-xxl-stretch-50 mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Carousel-->
                    <div id="kt_security_recent_alerts" class="carousel carousel-custom carousel-stretch slide"
                        data-bs-ride="carousel" data-bs-interval="8000">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack align-items-center flex-wrap">
                            <h4 class="text-gray-500 fw-semibold mb-0 pe-2">
                                Recent Alerts
                            </h4>

                            <!--begin::Carousel Indicators-->
                            <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="0" class="ms-1"></li>
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="1" class="ms-1 active"
                                    aria-current="true"></li>
                                <li data-bs-target="#kt_security_recent_alerts" data-bs-slide-to="2" class="ms-1"></li>
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Carousel inner-->
                        <div class="carousel-inner pt-6">
                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Latest Announcements
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            In the last year, you’ve probably had to adapt to new ways of living and
                                            working.
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Jun 10, 2021</span>

                                        <a href="#" class="btn btn-sm btn-light">Learn More</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="carousel-item active">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">
                                            Login Attempt Failed
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            As we approach one year of working remotely, we wanted to take a look back
                                            and share some ways teams around the world have collaborated effectively.
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Oct 05, 2021</span>

                                        <a href="#"
                                            class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Join</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="carousel-wrapper">
                                    <!--begin::Description-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">
                                            Top Picks For You
                                        </a>

                                        <p class="text-gray-600 fs-6 fw-semibold pt-3 mb-0">
                                            Today we are excited to share an amazing certification opportunity which is
                                            designed to teach you everything
                                        </p>
                                    </div>
                                    <!--end::Description-->

                                    <!--begin::Summary-->
                                    <div class="d-flex flex-stack pt-8">
                                        <span class="badge badge-light-primary fs-7 fw-bold me-2">Sep 11, 2021</span>

                                        <a href="#"
                                            class="btn btn-light btn-sm btn-color-muted fs-7 fw-bold px-5">Collaborate</a>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Carousel inner-->
                    </div>
                    <!--end::Carousel-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Security recent alerts-->

        </div>
        <!--end::Col-->


    </div>

    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Heading-->
            <div class="card-title">
                <h3>Login Sessions</h3>
            </div>
            <!--end::Heading-->

            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <div class="my-1 me-4">
                    <!--begin::Select-->
                    <select class="form-select form-select-sm form-select-solid w-125px select2-hidden-accessible"
                        data-control="select2" data-placeholder="Select Hours" data-hide-search="true"
                        data-select2-id="select2-data-9-kqzd" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option value="1" selected="" data-select2-id="select2-data-11-ulyh">1 Hours</option>
                        <option value="2">6 Hours</option>
                        <option value="3">12 Hours</option>
                        <option value="4">24 Hours</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                        data-select2-id="select2-data-10-ie27" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single form-select form-select-sm form-select-solid w-125px"
                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-disabled="false" aria-labelledby="select2-np2h-container"
                                aria-controls="select2-np2h-container"><span class="select2-selection__rendered"
                                    id="select2-np2h-container" role="textbox" aria-readonly="true" title="1 Hours">1
                                    Hours</span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                    <!--end::Select-->
                </div>

                <a href="#" class="btn btn-sm btn-primary my-1">
                    View All
                </a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                    <!--begin::Thead-->
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th class="min-w-250px">Location</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-150px">Device</th>
                            <th class="min-w-150px">IP Address</th>
                            <th class="min-w-150px">Time</th>
                        </tr>
                    </thead>
                    <!--end::Thead-->

                    <!--begin::Tbody-->
                    <tbody class="fw-6 fw-semibold text-gray-600">
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>Chrome - Windows</td>

                            <td>236.125.56.78</td>

                            <td>2 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>Safari - Mac OS</td>

                            <td>236.125.56.78</td>

                            <td>10 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                            </td>

                            <td>Firefox - Windows</td>

                            <td>236.125.56.10</td>

                            <td>20 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>

                            <td>iOS - iPhone Pro</td>

                            <td>236.125.56.54</td>

                            <td>30 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                            </td>

                            <td>
                                <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                            </td>

                            <td>Samsung Noted 5- Android</td>

                            <td>236.100.56.50</td>

                            <td>40 mins ago</td>
                        </tr>

                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Card body-->
    </div>

    <x-modal id="kt_modal_new_target" title="This is for test!">
        {{-- <form id="kt_modal_new_target_form" class="form" action="#">
            <!--begin::Heading-->
            <div class="mb-13 text-center">
                <!--begin::Title-->
                <h1 class="mb-3">Set First Target</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-muted fw-semibold fs-5">If you need more info, please check
                    <a href="#" class="fw-bold link-primary">Project Guidelines</a>.
                </div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Target Title</span>
                    <span class="ms-1" data-bs-toggle="tooltip"
                        title="Specify a target name for future usage and reference">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title"
                    name="target_title" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">Assign</label>
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                        data-placeholder="Select a Team Member" name="target_assign">
                        <option value="">Select user...</option>
                        <option value="1">Karina Clark</option>
                        <option value="2">Robert Doe</option>
                        <option value="3">Niel Owen</option>
                        <option value="4">Olivia Wild</option>
                        <option value="5">Sean Bean</option>
                    </select>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                    <!--begin::Input-->
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Datepicker-->
                        <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                            name="due_date" />
                        <!--end::Datepicker-->
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <label class="fs-6 fw-semibold mb-2">Target Details</label>
                <textarea class="form-control form-control-solid" rows="3" name="target_details"
                    placeholder="Type Target Details"></textarea>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Tags</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-stack mb-8">
                <!--begin::Label-->
                <div class="me-5">
                    <label class="fs-6 fw-semibold">Adding Users by Team Members</label>
                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget
                        planning</div>
                </div>
                <!--end::Label-->
                <!--begin::Switch-->
                <label class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                    <span class="form-check-label fw-semibold text-muted">Allowed</span>
                </label>
                <!--end::Switch-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-15 fv-row">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="fw-semibold me-5">
                        <label class="fs-6">Notifications</label>
                        <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Checkboxes-->
                    <div class="d-flex align-items-center">
                        <!--begin::Checkbox-->
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]"
                                value="email" checked="checked" />
                            <span class="form-check-label fw-semibold">Email</span>
                        </label>
                        <!--end::Checkbox-->
                        <!--begin::Checkbox-->
                        <label class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]"
                                value="phone" />
                            <span class="form-check-label fw-semibold">Phone</span>
                        </label>
                        <!--end::Checkbox-->
                    </div>
                    <!--end::Checkboxes-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Actions-->
        </form> --}}
    </x-modal>

</x-default-layout>