<x-default-layout>

    @section('title')
    Overview
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
            User Profile
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
    </div>
    @endsection

    <div class="card mb-5 mb-xxl-8">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{asset('admin')}}/assets/media/avatars/300-1.jpg" alt="image">
                    </div>
                </div>
                <!--end::Pic-->

                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{
                                    auth()->user()?->name ?? 'Test name'}}</a>
                                <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                            class="path1"></span><span class="path2"></span></i></a>
                            </div>
                            <!--end::Name-->

                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#"
                                    class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> Developer
                                </a>

                                <a href="#"
                                    class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">




                                    <i class="fa-solid fa-calendar fs-7 me-1  "></i>
                                    {{auth()->user()?->created_at->format('M d, Y') ?? '2 years ago'}}
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                    <i class="ki-duotone ki-sms fs-4 me-1"><span class="path1"></span><span
                                            class="path2"></span></i> {{ auth()->user()?->email ?? 'test@example.com'}}
                                </a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->

                        <!--begin::Actions-->
                        <div class="d-flex my-4">

                            <x-buttons.button class="me-2" type="secondary" href="/users">Test</x-buttons.button>

                            <!--begin::Menu-->
                            <div class="me-0">
                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-solid ki-dots-horizontal fs-2x"></i> </button>

                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->
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
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
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
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->

                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">
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
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                            data-kt-initialized="1">
                                            $4,500</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-500">Earnings</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Wrapper-->

                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->


        </div>
    </div>

    @push('scripts')
    <script src="{{asset('admin')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/account/settings/signin-methods.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/account/settings/profile-details.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/account/settings/deactivate-account.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/pages/user-profile/general.js"></script>
    <script src="{{asset('admin')}}/assets/js/widgets.bundle.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/two-factor-authentication.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/utilities/modals/users-search.js"></script>
    @endpush

</x-default-layout>