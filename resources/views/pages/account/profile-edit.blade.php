<x-default-layout>
    @section('title')
    Profile
    @endsection

    @section('breadcrumbs')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard' , 'en')}}" class="text-muted text-hover-primary">Profile</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            Edit
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

    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true"
            aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form" class="form">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('{{asset('admin')}}/assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{asset('admin')}}/assets/media/avatars/300-1.jpg)">
                                </div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                            Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <!--begin::Row-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="fname"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                placeholder="First name" value="Max" />
                        </div>
                        <!--end::Col-->
                        <!--end::Row-->
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Contact Phone</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                                placeholder="Phone number" value="044 3276 454 935" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Input-->
                            <select name="language" aria-label="Select a Language" data-control="select2"
                                data-placeholder="Select a language..."
                                class="form-select form-select-solid form-select-lg">
                                <option value="">Select a Language...</option>
                                <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                    Indonesia - Indonesian</option>
                                <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa
                                    Melayu - Malay</option>
                                <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                    Catalan</option>
                                <option data-kt-flag="flags/czech-republic.svg" value="cs">
                                    Čeština - Czech</option>
                                <option data-kt-flag="flags/netherlands.svg" value="da">
                                    Dansk - Danish</option>
                                <option data-kt-flag="flags/germany.svg" value="de">Deutsch
                                    - German</option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="en">
                                    English</option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British
                                    English
                                </option>
                                <option data-kt-flag="flags/spain.svg" value="es">Español -
                                    Spanish</option>
                                <option data-kt-flag="flags/philippines.svg" value="fil">
                                    Filipino</option>
                                <option data-kt-flag="flags/france.svg" value="fr">Français
                                    - French</option>
                                <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge -
                                    Irish (beta)</option>
                                <option data-kt-flag="flags/greenland.svg" value="gl">Galego
                                    - Galician (beta)</option>
                                <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski
                                    - Croatian</option>
                                <option data-kt-flag="flags/italy.svg" value="it">Italiano -
                                    Italian</option>
                                <option data-kt-flag="flags/hungary.svg" value="hu">Magyar -
                                    Hungarian</option>
                                <option data-kt-flag="flags/netherlands.svg" value="nl">
                                    Nederlands - Dutch</option>
                                <option data-kt-flag="flags/norway.svg" value="no">Norsk -
                                    Norwegian</option>
                                <option data-kt-flag="flags/poland.svg" value="pl">Polski -
                                    Polish</option>
                                <option data-kt-flag="flags/portugal.svg" value="pt">
                                    Português - Portuguese</option>
                                <option data-kt-flag="flags/romania.svg" value="ro">Română -
                                    Romanian</option>
                                <option data-kt-flag="flags/slovakia.svg" value="sk">
                                    Slovenčina - Slovak</option>
                                <option data-kt-flag="flags/finland.svg" value="fi">Suomi -
                                    Finnish</option>
                                <option data-kt-flag="flags/el-salvador.svg" value="sv">
                                    Svenska - Swedish</option>
                                <option data-kt-flag="flags/virgin-islands.svg" value="vi">
                                    Tiếng Việt - Vietnamese</option>
                                <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe -
                                    Turkish</option>
                                <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά
                                    - Greek</option>
                                <option data-kt-flag="flags/bulgaria.svg" value="bg">
                                    Български език - Bulgarian</option>
                                <option data-kt-flag="flags/russia.svg" value="ru">Русский -
                                    Russian</option>
                                <option data-kt-flag="flags/suriname.svg" value="sr">Српски
                                    - Serbian</option>
                                <option data-kt-flag="flags/ukraine.svg" value="uk">
                                    Українська мова - Ukrainian</option>
                                <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית
                                    - Hebrew</option>
                                <option data-kt-flag="flags/pakistan.svg" value="ur">اردو -
                                    Urdu (beta)</option>
                                <option data-kt-flag="flags/argentina.svg" value="ar">
                                    العربية - Arabic</option>
                                <option data-kt-flag="flags/argentina.svg" value="fa">فارسی
                                    - Persian</option>
                                <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी
                                    - Marathi</option>
                                <option data-kt-flag="flags/india.svg" value="hi">हिन्दी -
                                    Hindi</option>
                                <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা
                                    - Bangla</option>
                                <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી -
                                    Gujarati</option>
                                <option data-kt-flag="flags/india.svg" value="ta">தமிழ் -
                                    Tamil</option>
                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada
                                </option>
                                <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย
                                    - Thai</option>
                                <option data-kt-flag="flags/south-korea.svg" value="ko">한국어
                                    - Korean</option>
                                <option data-kt-flag="flags/japan.svg" value="ja">日本語 -
                                    Japanese</option>
                                <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 -
                                    Simplified Chinese</option>
                                <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 -
                                    Traditional Chinese</option>
                            </select>
                            <!--end::Input-->
                            <!--begin::Hint-->
                            <div class="form-text">Please select a preferred language,
                                including date, time, and number formatting.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <!--begin::Options-->
                            <div class="d-flex align-items-center mt-3">
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                    <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                    <span class="fw-semibold ps-2 fs-6">Email</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-custom form-check-inline form-check-solid">
                                    <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                    <span class="fw-semibold ps-2 fs-6">Phone</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-0">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow
                            Marketing</label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing"
                                    checked="checked" />
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                        Changes</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>

    <div class="card  mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_signin_method">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Sign-in Method</h3>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Content-->
        <div id="kt_account_settings_signin_method" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Email Address-->
                <div class="d-flex flex-wrap align-items-center">
                    <!--begin::Label-->
                    <div id="kt_signin_email">
                        <div class="fs-6 fw-bold mb-1">Email Address</div>
                        <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Edit-->
                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate">
                            <div class="row mb-6">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email
                                            Address</label>
                                        <input type="email" class="form-control form-control-lg form-control-solid"
                                            id="emailaddress" placeholder="Email Address" name="emailaddress"
                                            value="support@keenthemes.com">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                            name="confirmemailpassword" id="confirmemailpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Update
                                    Email</button>
                                <button id="kt_signin_cancel" type="button"
                                    class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->

                    <!--begin::Action-->
                    <div id="kt_signin_email_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Change Email</button>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Email Address-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->

                <!--begin::Password-->
                <div class="d-flex flex-wrap align-items-center mb-10">
                    <!--begin::Label-->
                    <div id="kt_signin_password">
                        <div class="fs-6 fw-bold mb-1">Password</div>
                        <div class="fw-semibold text-gray-600">************</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Edit-->
                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate">
                            <div class="row mb-1">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="currentpassword" id="currentpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="newpassword" id="newpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="confirmpassword" id="confirmpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>

                            <div class="d-flex">
                                <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update
                                    Password</button>
                                <button id="kt_password_cancel" type="button"
                                    class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->

                    <!--begin::Action-->
                    <div id="kt_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Password-->


                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span
                            class="path2"></span></i>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-semibold">
                            <h4 class="text-gray-900 fw-bold">Title of you notice</h4>

                            <div class="fs-6 text-gray-700 pe-7">This is for description.....</div>
                        </div>
                        <!--end::Content-->
                        <!--begin::Action-->
                        <x-buttons.button class="" type="primary" href="#">Test</x-buttons.button>
                        <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Content-->
    </div>

    <div class="card  ">

        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Delete Account</h3>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Content-->
        <div id="kt_account_settings_deactivate" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_deactivate_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">

                <!--begin::Card body-->
                <div class="card-body border-top p-9">

                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                            <div class=" fw-semibold">
                                <h4 class="text-gray-900 fw-bold">You Are Deleting Your Account</h4>

                                <div class="fs-6 text-gray-700 ">For extra security, this requires you to confirm your
                                    email or phone number when you reset your sign password. <br><a class="fw-bold"
                                        href="#">Learn more</a></div>
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->

                    <!--begin::Form input row-->
                    <div class="form-check form-check-solid fv-row fv-plugins-icon-container">
                        <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate">
                        <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account
                            deletion</label>
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <!--end::Form input row-->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button id="kt_account_deactivate_account_submit" type="submit"
                        class="btn btn-danger fw-semibold">Delete Account</button>
                </div>
                <!--end::Card footer-->
                <input type="hidden">
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
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